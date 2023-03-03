import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import path from "path";
const host = "localhost";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/js/app.js"],
            refresh: true,
        }),
    ],
    server: {
        host,
        hmr: { host },
    },
    resolve: {
        alias: {
            "~bootstrap": path.resolve(__dirname, "node_modules/bootstrap"),
        },
    },
});
