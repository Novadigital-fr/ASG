export default defineEventHandler((event) => {
  const host = getRequestHost(event)

  // Skip in local dev
  if (!host || host.includes('localhost') || host.includes('127.0.0.1')) {
    return
  }

  // Redirect non-www to www (301 permanent)
  if (!host.startsWith('www.')) {
    const url = getRequestURL(event)
    return sendRedirect(event, `https://www.${host}${url.pathname}${url.search}`, 301)
  }
})
