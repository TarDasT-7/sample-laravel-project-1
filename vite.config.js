import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import { resolve } from "path";
import liveReload from "vite-plugin-live-reload";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
        liveReload("public/css/**/*.css"),
    ],
    resolve: {
        alias: {
            "@": resolve(__dirname, "resources/js"),
            "~": resolve(__dirname, "resources/css"),
        },
    },
});
