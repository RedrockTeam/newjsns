/*@desc GruntFile
 *@date 2015/1/23
 *@author smelrain
 */

module.exports = function (grunt) {
    //加载辅助模块
    var path = require('path'),
        fs = require('fs');
    //读取配置文件
    var gConfig = grunt.file.readJSON('grunt.config.json'),
        paths = gConfig.path,
        depth = gConfig.depth;

    //init
    grunt.initConfig({
        watch: {
            options: {
                spawn: false
            },
            files: _.map(paths, function (path) {
                return path;
            })
        }
    });

    //依赖包
    var devNpms = [
        "grunt-contrib-clean",
        "grunt-contrib-copy",
        "grunt-contrib-cssmin",
        "grunt-contrib-imagemin",
        "grunt-contrib-jshint",
        "grunt-contrib-uglify",
        "grunt-contrib-watch"
    ];

    //加载依赖包
    (function () {
        devNpms.forEach(function (npm) {
            grunt.loadNpmTasks(npm)
        });
    })();

    //watch事件处理文件
    grunt.event.on('watch', function(type, src){
        console.log('type:'+ type + 'src:' + src );
        //todo
    });
};
