import { createRoot } from 'react-dom/client'
import { createInertiaApp } from '@inertiajs/inertia-react'
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers'

createInertiaApp({
  // @ts-ignore
  resolve: (name) => resolvePageComponent(`./Pages/${name}/index.tsx`, import.meta.glob('./Pages/**/*.tsx')),
  setup({ el, App, props }) {
    createRoot(el).render(<App {...props} />)
  },
})
