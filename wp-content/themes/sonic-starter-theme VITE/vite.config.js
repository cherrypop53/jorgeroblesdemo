import { defineConfig } from 'vite';
import liveReload from 'vite-plugin-live-reload';
import path from 'path';

export default defineConfig({
    plugins: [
        liveReload([
            'scss/core/**/*.scss',
            'scss/blocks/**/*.scss',
            '**/*.php',
        ]),
    ],
    css: {
        preprocessorOptions: {
            scss: {
                additionalData: '' // Si necesitas variables globales, aquí van
            }
        }
    },
    build: {
        outDir: 'dist',
        emptyOutDir: false,
        rollupOptions: {
            input: {
                styles: path.resolve(__dirname, 'src/styles.css') // EL ARCHIVO DE ENTRADA CORRECTO
            },
            output: {
                assetFileNames: 'styles.css'
            }
        }
    },
    server: {
        proxy: {
            '/': {
                target: 'https://jorgedev.test:8890',
                changeOrigin: true,
                secure: false,
            }
        },
        watch: {
            usePolling: true
        },
        port: 5173,
        open: false
    }
});