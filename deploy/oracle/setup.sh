#!/usr/bin/env bash
# One-time setup on a fresh Oracle Cloud Ubuntu server (ARM Ampere A1).
# Usage:  bash setup.sh social.tradehiveagency.com
set -euo pipefail
DOMAIN="${1:?usage: bash setup.sh <domain>}"
cd "$(dirname "$0")"

# 1. Docker
if ! command -v docker >/dev/null; then
  curl -fsSL https://get.docker.com | sudo sh
  sudo usermod -aG docker "$USER"
fi

# 2. Open web ports in the server firewall (Oracle Ubuntu images block them).
sudo iptables -I INPUT 6 -m state --state NEW -p tcp --dport 80 -j ACCEPT
sudo iptables -I INPUT 6 -m state --state NEW -p tcp --dport 443 -j ACCEPT
sudo netfilter-persistent save || true

# 3. Secrets (.env), generated once and kept only on this server.
if [ ! -f .env ]; then
  rnd() { openssl rand -hex "$1"; }
  cat > .env <<ENV
APP_DOMAIN=${DOMAIN}
APP_KEY=base64:$(openssl rand -base64 32)
DB_PASSWORD=$(rnd 24)
REVERB_APP_ID=$(shuf -i 100000-999999 -n 1)
REVERB_APP_KEY=$(rnd 16)
REVERB_APP_SECRET=$(rnd 24)
# Fill in later: mail, social networks, Stripe, OpenAI.
MAIL_MAILER=log
MAIL_FROM_ADDRESS=noreply@tradehiveagency.com
MAIL_FROM_NAME="TradeHive Social"
ENV
  chmod 600 .env
fi
mkdir -p backups

# 4. Build and start.
sudo docker compose up -d --build

# 5. OAuth/MCP signing keys, stored in .env so restarts keep API tokens valid.
if ! grep -q PASSPORT_PRIVATE_KEY .env; then
  KEYS=$(sudo docker compose exec -T app sh -c 'php artisan passport:keys --force >/dev/null && cat storage/oauth-private.key && echo ---SPLIT--- && cat storage/oauth-public.key')
  PRIV=$(printf '%s' "$KEYS" | sed -n '1,/---SPLIT---/p' | sed '$d' | awk '{printf "%s\\n", $0}')
  PUB=$(printf '%s' "$KEYS" | sed -n '/---SPLIT---/,$p' | sed '1d' | awk '{printf "%s\\n", $0}')
  printf 'PASSPORT_PRIVATE_KEY="%s"\nPASSPORT_PUBLIC_KEY="%s"\n' "$PRIV" "$PUB" >> .env
  sudo docker compose up -d app
fi

echo "TradeHive Social is starting at https://${DOMAIN} (HTTPS certificate appears once DNS points here)."
