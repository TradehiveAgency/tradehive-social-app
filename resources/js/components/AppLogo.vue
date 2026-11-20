<script setup lang="ts">
withDefaults(
    defineProps<{
        /** `full` is the mark and the "tradehive social" wordmark, `mark` the mark alone. */
        variant?: 'full' | 'mark';
    }>(),
    { variant: 'full' },
);
</script>

<template>
    <span
        class="inline-flex shrink-0 items-center gap-[0.32em] font-logo leading-none font-bold tracking-[-0.01em] text-foreground"
        role="img"
        aria-label="TradeHive Social"
        data-testid="app-logo"
    >
        <svg
            viewBox="0 0 64 64"
            class="size-[1.15em] shrink-0"
            aria-hidden="true"
        >
            <defs>
                <linearGradient
                    id="tradehive-mark-gradient"
                    x1="8"
                    y1="6"
                    x2="57"
                    y2="59"
                    gradientUnits="userSpaceOnUse"
                >
                    <stop stop-color="#18D58B" />
                    <stop offset="1" stop-color="#04784E" />
                </linearGradient>
            </defs>
            <rect
                x="3"
                y="3"
                width="58"
                height="58"
                rx="19"
                fill="url(#tradehive-mark-gradient)"
            />
            <path d="M21 19h22v7H35v22h-8V26h-6v-7Z" fill="#fff" />
            <path d="M43 34v14h-7V34h7Z" fill="#B8F7D7" />
            <circle cx="46.5" cy="22.5" r="3.5" fill="#B8F7D7" />
        </svg>
        <span v-if="variant === 'full'" aria-hidden="true"
            >tradehive<span class="font-normal text-muted-foreground">
                social</span
            ></span
        >
    </span>
</template>
