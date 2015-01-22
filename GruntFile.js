/*@desc GruntFile
 *@date 2015/1/23
 *@author smelrain
 */

module.exports = function (grunt) {
    //加载辅助模块
    var path = require('path'),
        _ = require('underscore');

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

    //所有的插件配置
    var extensions = function (type, src) {
        return {
            jshint: {  //js语法检测
                options: {
                    globals : {
                        jQuery: true,
                        console: true,
                        module: true
                    }
                },
                files : [src]
            },
            uglify : {   //压缩js
                options : {
                    banner : '/*' + src + 'was created by' + grunt.template.today('yyyy-mm-dd') + 'by redrock' + '*/'
                },
                build : {
                    files : [{
                        expand : true,
                        dest : 'public/js/',
                        src : src,
                        rename : changeDest
                    }]
                }
            },
            cssmin : {  //压缩css
                build : {
                    files : [{
                        expand : true,
                        src : src,
                        dest : 'public/css/',
                        rename : changeDest
                    }]
                }
            },
            imagemin : {   //压缩图片
                static : {
                    files : [{
                        expand : true,
                        src : src,
                        dest : 'public/images/',
                        rename : changeDest
                    }]
                }
            }
        };
    };

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
            grunt.loadNpmTasks(npm);
        });
    })();

    //加载任务列表
    grunt.registerTask('default', 'watch');

    //watch事件处理文件
    grunt.event.on('watch', function (type, src) {
            var isDir = grunt.file.isDir(src),
                isFile = grunt.file.isFile(src),
                tasks = [],
                queenTasks = grunt.config.data;
        console.log(isFile);
        console.log(src);
            if (isDir) {

            } else if (isFile) {
                var ext = path.extname(src),
                    isJs = ['.js', '.json'].indexOf(ext) != -1,
                    isCss = '.css' === ext,
                    isImg = ['.png', '.gif', '.jpg'].indexOf(ext) != -1;
                console.log(isImg);

                if (isJs) {
                    queenTasks.jshint = extensions(type, src).jshint;
                    queenTasks.uglify = extensions(type, src).uglify;
                    tasks.push('jshint', 'uglify');
                }

                if(isCss){
                    queenTasks.cssmin = extensions(type, src).cssmin;
                    tasks.push('cssmin');
                }

                if(isImg){
                    queenTasks.imagemin = extensions(type, src).imagemin;
                    tasks.push('imagemin');
                    console.log('hahh');
                }
            }

        grunt.task.run(tasks);
    });

    /*------- 辅助函数-----*/
    //@desc 修改文件路径
    //@param type,src
    //return dest
    function changeDest(dest, src){
        var count = depth, //深度
            iIndex;
        console.log(src);

        while(count--){
            iIndex = src.indexOf('/');
            src = src.slice(iIndex+1);
        }

        return dest + src;
    }
    console.log('dsfuguy');
};
