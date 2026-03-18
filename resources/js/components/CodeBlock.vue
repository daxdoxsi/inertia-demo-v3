<script setup lang="ts">
defineProps<{
    code: string;
    title?: string;
}>();

function dedent(raw: string) {
    const lines = raw.replace(/^\n/, '').replace(/\s+$/, '').split('\n');
    const indent = Math.min(
        ...lines.filter((l) => l.trim()).map((l) => l.match(/^(\s*)/)?.[1].length ?? 0),
    );

    return lines.map((l) => l.slice(indent)).join('\n');
}
</script>

<template>
    <div
        class="rounded-lg border border-black/5 bg-neutral-50/80 p-3 font-mono text-xs dark:border-white/5 dark:bg-neutral-900/80"
    >
        <p v-if="title" class="font-semibold">{{ title }}</p>
        <pre :class="{ 'mt-1': title }">{{ dedent(code) }}</pre>
    </div>
</template>
