const path = require('path')

module.exports = {
    entry: {
        joplinfiles_nc_app: './src/joplinfiles_nc_app.js',
    },
    output: {
        path:     path.resolve(__dirname, 'js'),
        filename: '[name].js',
    },
    resolve: {
        fallback: {
            path:   false,
            fs:     false,
            os:     false,
            stream: false,
        },
    },
}
