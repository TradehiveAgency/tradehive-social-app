<script setup lang="ts">
import { usePage } from '@inertiajs/vue3';
import { IconCircleCheck, IconCircleCheckFilled } from '@tabler/icons-vue';
import { computed } from 'vue';

import AppLogo from '@/components/AppLogo.vue';
import LanguageSelect from '@/components/LanguageSelect.vue';
import { Alert, AlertDescription } from '@/components/ui/alert';
import { useGuestLocale } from '@/composables/useGuestLocale';
import type { Auth } from '@/types';

const widthClass = {
    sm: 'max-w-[360px]',
    md: 'max-w-xl',
} as const;

withDefaults(
    defineProps<{
        title?: string;
        description?: string;
        status?: string;
        panel?: boolean;
        width?: keyof typeof widthClass;
    }>(),
    {
        title: undefined,
        description: undefined,
        status: undefined,
        panel: false,
        width: 'sm',
    },
);

const page = usePage();

const isGuest = computed(() => !(page.props.auth as Auth).user);
const { locale, languages } = useGuestLocale();

const highlights = ['schedule', 'ai', 'approvals', 'local'] as const;
</script>

<template>
    <div
        :class="[
            'grid min-h-svh grid-cols-1 bg-muted',
            panel ? 'lg:grid-cols-2' : '',
        ]"
    >
        <div
            class="relative flex min-h-svh min-w-0 flex-col items-center px-4 pt-16 pb-8 sm:px-8 sm:py-16"
        >
            <div class="absolute end-4 top-4 sm:end-6 sm:top-6">
                <LanguageSelect
                    v-if="isGuest"
                    v-model="locale"
                    :languages="languages"
                    :label="$t('settings.preferences.language.heading')"
                    testid="language-picker"
                    trigger-class="bg-card"
                />
            </div>

            <div
                :class="[
                    'my-auto flex w-full flex-col gap-6',
                    widthClass[width],
                ]"
                data-testid="auth-content"
            >
                <div class="flex flex-col items-center gap-4 text-center">
                    <AppLogo
                        variant="mark"
                        class="motion-auth-logo text-[38px]"
                        data-testid="auth-logo"
                    />
                    <div
                        v-if="title || description"
                        class="flex flex-col gap-1"
                    >
                        <h1
                            v-if="title"
                            class="font-heading text-xl font-medium tracking-tight text-balance text-foreground"
                            data-testid="auth-title"
                        >
                            {{ title }}
                        </h1>
                        <p
                            v-if="description"
                            class="text-sm text-balance text-muted-foreground"
                        >
                            {{ description }}
                        </p>
                    </div>
                </div>

                <Alert
                    v-if="status"
                    class="[&>svg]:text-success-text"
                    data-testid="auth-status"
                >
                    <IconCircleCheck />
                    <AlertDescription>{{ status }}</AlertDescription>
                </Alert>

                <slot />
            </div>

            <div
                v-if="$slots.footer"
                class="w-full max-w-sm pt-8 sm:absolute sm:inset-x-0 sm:bottom-6 sm:mx-auto sm:pt-0"
                data-testid="auth-footer"
            >
                <slot name="footer" />
            </div>
        </div>

        <div
            v-if="panel"
            class="hidden p-8 ps-0 lg:sticky lg:top-0 lg:block lg:h-svh lg:self-start"
        >
            <div
                class="relative flex h-full flex-col items-center overflow-hidden rounded-[20px] bg-primary-subtle px-12 pt-14 text-center xl:px-16"
            >
                <h2
                    class="motion-auth-reveal max-w-lg font-heading text-[clamp(30px,3.2vw,48px)] leading-[1.12] font-normal tracking-[-0.03em] text-balance text-foreground"
                >
                    {{ $t('auth.panel.heading') }}
                </h2>

                <ul
                    class="motion-auth-fade mt-10 flex w-full max-w-md flex-col gap-4 text-start"
                    data-testid="auth-highlights"
                >
                    <li
                        v-for="highlight in highlights"
                        :key="highlight"
                        class="flex items-start gap-3 rounded-xl bg-card p-4 shadow-xs"
                    >
                        <IconCircleCheckFilled
                            class="mt-0.5 size-5 shrink-0 text-primary"
                            aria-hidden="true"
                        />
                        <span class="flex flex-col gap-0.5">
                            <span class="font-medium text-foreground">{{
                                $t(`auth.panel.${highlight}.title`)
                            }}</span>
                            <span class="text-sm text-muted-foreground">{{
                                $t(`auth.panel.${highlight}.body`)
                            }}</span>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>
