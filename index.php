<!doctype html>
<html>
<head>
<style>
body, html { margin:0; padding:0; width:100%; height: 100; background-color: white; }
.map { padding: 3em }
.container { width: 100%; height: auto; background-color: gray; }
.ie svg { width:500px; height:400px; }
.places { stroke-width: 10; stroke: #444 }
.flowpath_l {
    fill:none;stroke:#000000;stroke-width:30;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:none;marker-end:url(#TriangleOutM);
}
.flowpath_s {
    fill:none;stroke:#000000;stroke-width:15;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1;stroke-miterlimit:4;stroke-dasharray:none;
}
/*
@media (max-width: 300px) {
    .places circle { stroke-width:80 }
    .flowpath_l path { stroke-width: 30 }
    .flowpath_s path { stroke-width: 15 }
}
@media (max-width: 500px) {
    .places circle { stroke-width:120 }
    .flowpath_l path { stroke-width: 60 }
    .flowpath_s path { stroke-width: 30 }
}*/
/*
@media (max-width: 600px) {
    .places circle { stroke-width:60 }
}*/

</style>
</head>
<body class="notie">
    <div class="map">
        <svg class="container" viewBox="0 0 1587 1076" pxreserveAspectRatio="none">
            <defs>
                <marker orient="auto" id="TriangleOutM" style="overflow:visible">
                    <path d="M 5.77,0.0 L -2.88,5.0 L -2.88,-5.0 L 5.77,0.0 z " style="fill-rule:evenodd;stroke:#000000;stroke-width:1.0pt;marker-start:none" transform="scale(0.4)" />
                </marker>
            </defs>
            <image x="0" y="0" width="1587" height="1076" xlink:href="lower-02.jpg" />
            <g class="flowpath_l">
                <path d="m 68.474226,691.42268 c 0,0 22.605737,39.30677 159.554194,54.3377 C 364.97687,760.79131 421.8443,723.15464 595.53502,646.3299 769.22574,569.50516 744.83939,463.58139 742.70671,396.3036 741.59006,361.07737 726.04889,294.71385 726.04889,294.71385" />
                <path d="m 1294.3116,831.468 c 0,0 -57.2355,-131.24442 -145.2557,-154.70331 C 951.39348,624.08426 917.59132,569.29905 880.98214,349.64398" />
            </g>
            <g class="flowpath_s">
                <path d="m 384.98684,852.80211 c 0,0 -4.72377,-59.04706 210.20753,-209.02659" />
                <path d="m 547.95672,869.33529 c 0,0 -88.57059,-75.58024 43.69483,-219.65507" />
                <path d="m 408.60566,655.58493 c 0,0 1.18094,38.97106 186.58871,-8.26659" />
                <path d="m 66.723179,735.88893 c 0,0 83.846831,22.43788 160.608011,11.80941" />
                <path d="m 1401.7772,989.79129 c 0,0 -162.6665,62.65621 -239.731,5.90471 -45.654,-33.62027 -34.2473,-247.99766 -9.4476,-320.03507" />
                <path d="m 1462.0052,941.3727 c 0,0 -120.9416,40.86536 -220.836,-55.50424 -71.4894,-68.96682 -89.7515,-209.02659 -89.7515,-209.02659" />
                <path d="m 1307.8924,686.2894 c 0,0 -50.19,11.80941 -157.0652,-8.26659" />
            </g>
            <g class="places">
               <circle cx="711" cy="242" r="10" id="tripoli" />
               <circle cx="744" cy="398" r="10" id="sabha" />
               <circle cx="870" cy="300" r="10" id="ajdabiya" />
               <circle cx="228" cy="746" r="10" id="bamako" />
               <circle cx="1151" cy="677" r="10" id="khartoum" />
               <circle cx="1293" cy="830" r="10" id="addis_abeba" />
               <circle cx="410" cy="657" r="10" id="gao" />
               <circle cx="595" cy="647" r="10" id="agadez" />
            </g>
        </svg>
    </div>
</body>
</html>
