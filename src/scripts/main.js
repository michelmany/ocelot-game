import Router from './util/Router';
import common from './routes/common';

/** Populate Router instance with DOM routes */
const routes = new Router({
    // All pages
    common,
  });

document.addEventListener("DOMContentLoaded", () => routes.loadEvents());