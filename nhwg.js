/* global userSettings */
(function (s, k, t, d) {
    s = window.localStorage;
    k = 'WP_DATA_USER_' + userSettings.uid;
    t = s.getItem(k);
    if (t) {
        d = JSON.parse(t);
        if ('object' === typeof d && 'boolean' === typeof d['core/edit-post'].preferences.features.welcomeGuide) {
            d['core/edit-post'].preferences.features.welcomeGuide = false;
            s.setItem(k, JSON.stringify(d));
        }
    } else {
        d = {'core/edit-post': {preferences: {features: {welcomeGuide: false}}}};
        s.setItem(k, JSON.stringify(d));
    }
})();
