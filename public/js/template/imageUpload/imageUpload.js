require.config({baseUrl:"../jsns/public/js/lib",shim:{underscore:{exports:"_"},imageSelect:["jqueryPack"]},paths:{jquery:"jquery",jqueryPack:"jquery-pack",port:"../template/home/port",imageForm:"../widget/imageForm/imageForm",imageSelect:"jquery.imgareaselect.min"}}),define(["imageForm"],function(){console.log("home init")});