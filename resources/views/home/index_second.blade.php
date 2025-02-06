@extends("layouts.main_second")

@section("content")
        <section class="section section-decor parallax-scene-js">
            <div class="section-halfscreen">
                <div class="section-halfscreen-inner">
                    <div class="section-halfscreen-image wow fadeIn"  style= "background-image: url({{asset('images/photo_2025-01-06_11-24-57.webp')}} );"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-lg-5">
                                <div class="section-halfscreen-content">
                                    <div class="wow-outer divider-small-outer">
                                        <div class="divider-small wow fadeInLeft"></div>
                                    </div>

                                    <div class="wow-outer heading-3 offset-negative-1">
                                        <h1 class="wow fadeInUp" data-wow-delay=".2s" >
                                            <span class="font-weight-light">Лабораторія «Лімарія» SECOND PAGE</span><br>
                                            <span class="font-weight-bold">Мікробіологія, яка рухає майбутнє</span>
                                        </h1>
                                    </div>

                                    <div class="wow-outer p">
                                        <p class="wow fadeInDown" data-wow-delay=".2s">Ми пропонуємо:</p>
                                        <ol class="custom-list">
                                            <li>
                                                <p class="wow fadeInDown" data-wow-delay=".2s">Надзвичайну точність і швидкість досліджень.</p>
                                            </li>

                                            <li>
                                                <p class="wow fadeInDown" data-wow-delay=".2s">Команду висококваліфікованих фахівців.</p>
                                            </li>

                                            <li>
                                                <p class="wow fadeInDown" data-wow-delay=".2s">Персоналізований підхід до кожного клієнта</p>
                                            </li>

                                        </ol>
                                        <!-- </div><a class="button button-primary button-winona wow fadeIn" href="#">Дiзнатись бiльше</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="decor-1">
                    <div class="layer" data-depth="0.1">
                        <svg width="618px" height="422px" viewbox="0 0 618 422">
                            <path fill-rule="evenodd" fill="rgb(245, 246, 250)" d="M136.975,313.080 C145.281,313.080 152.160,306.976 153.366,299.011 L187.264,299.011 C188.597,305.925 194.677,311.150 201.983,311.150 C202.757,311.150 203.512,311.071 204.255,310.958 L219.662,337.629 C215.755,340.336 213.195,344.846 213.195,349.956 C213.195,355.538 216.248,360.402 220.774,362.983 L202.058,395.385 C201.381,395.261 200.684,395.187 199.971,395.187 C194.725,395.187 190.314,398.718 188.961,403.529 L148.557,403.529 C147.204,397.437 141.769,392.878 135.265,392.878 C133.843,392.878 132.471,393.098 131.181,393.502 L112.397,360.982 C115.200,358.897 117.025,355.569 117.025,351.807 C117.025,348.332 115.470,345.225 113.024,343.126 L131.019,311.972 C132.869,312.683 134.874,313.080 136.975,313.080 M325.234,306.748 C330.479,306.748 334.890,303.217 336.244,298.405 L371.564,298.405 C373.763,304.980 379.959,309.723 387.276,309.723 C389.285,309.723 391.211,309.365 392.993,308.710 C393.341,308.630 393.685,308.540 394.022,308.433 L414.770,344.349 C413.224,346.007 412.271,348.222 412.271,350.666 C412.271,353.109 413.223,355.324 414.769,356.980 L395.412,390.488 C393.240,389.442 390.803,388.856 388.229,388.856 C379.924,388.856 373.045,394.959 371.838,402.924 L334.491,402.924 C333.250,399.782 330.190,397.557 326.603,397.557 C326.003,397.557 325.419,397.620 324.855,397.738 L305.542,364.307 C309.450,361.599 312.009,357.089 312.009,351.978 C312.009,347.817 310.310,344.055 307.570,341.339 C306.906,340.190 306.109,339.128 305.199,338.175 L323.444,306.591 C324.028,306.685 324.622,306.748 325.234,306.748 M42.583,258.258 C50.888,258.258 57.767,252.154 58.973,244.190 L95.282,244.190 C96.732,247.421 99.972,249.675 103.745,249.675 C104.278,249.675 104.800,249.621 105.308,249.534 L124.752,283.191 C121.140,285.929 118.801,290.256 118.801,295.136 C118.801,299.288 120.495,303.044 123.225,305.758 C123.749,306.533 124.335,307.265 124.979,307.940 L106.229,340.398 C106.013,340.384 105.798,340.365 105.579,340.365 C100.333,340.365 95.921,343.897 94.568,348.709 L54.165,348.709 C52.812,342.616 47.376,338.058 40.873,338.058 C39.451,338.058 38.079,338.276 36.790,338.680 L16.042,302.765 C17.589,301.108 18.540,298.893 18.540,296.449 C18.540,294.006 17.589,291.789 16.043,290.134 L35.399,256.626 C37.572,257.673 40.009,258.258 42.583,258.258 M228.281,254.083 C235.359,254.083 241.275,249.177 242.853,242.586 L281.335,242.586 C282.678,249.488 288.758,254.698 296.056,254.698 C297.101,254.698 298.123,254.591 299.109,254.387 L317.753,286.660 C315.327,288.757 313.786,291.850 313.786,295.308 C313.786,298.782 315.342,301.890 317.789,303.989 L300.132,334.553 C298.023,333.581 295.678,333.035 293.203,333.035 C284.898,333.035 278.019,339.139 276.814,347.103 L242.914,347.103 C241.581,340.190 235.501,334.965 228.195,334.965 C227.420,334.965 226.665,335.043 225.923,335.157 L210.517,308.486 C214.423,305.779 216.984,301.269 216.984,296.158 C216.984,290.695 214.055,285.924 209.686,283.303 L226.618,253.990 C227.165,254.049 227.719,254.083 228.281,254.083 M137.063,202.214 C145.368,202.214 152.246,196.110 153.452,188.145 L189.324,188.145 C190.450,190.145 192.294,191.682 194.510,192.409 C195.743,193.110 197.167,193.514 198.688,193.514 C198.930,193.514 199.164,193.496 199.400,193.476 L218.967,227.347 C215.505,230.093 213.281,234.332 213.281,239.092 C213.281,244.555 216.211,249.325 220.581,251.945 L203.645,281.259 C203.100,281.200 202.546,281.166 201.983,281.166 C194.904,281.166 188.987,286.072 187.410,292.665 L153.089,292.665 C151.352,285.371 144.804,279.940 136.975,279.940 C136.066,279.940 135.177,280.016 134.308,280.157 C134.140,280.151 133.972,280.144 133.802,280.144 C132.755,280.144 131.734,280.252 130.749,280.456 L110.961,246.203 C112.244,244.615 113.020,242.605 113.020,240.404 C113.020,237.961 112.068,235.745 110.522,234.089 L129.878,200.582 C132.051,201.629 134.488,202.214 137.063,202.214 M321.944,197.284 C328.897,197.284 334.734,192.551 336.432,186.134 L375.071,186.134 C376.547,192.862 382.543,197.900 389.719,197.900 C390.765,197.900 391.786,197.791 392.773,197.588 L412.560,231.843 C411.477,233.268 410.825,235.039 410.825,236.967 C410.825,238.171 411.080,239.315 411.532,240.353 C411.894,242.012 412.696,243.509 413.814,244.709 L394.459,278.216 C392.286,277.169 389.850,276.583 387.276,276.583 C378.968,276.583 372.090,282.688 370.885,290.653 L335.676,290.653 C333.893,286.656 329.894,283.867 325.234,283.867 C324.793,283.867 324.360,283.898 323.933,283.945 L305.227,251.563 C308.772,248.821 311.055,244.533 311.055,239.707 C311.055,234.125 308.002,229.261 303.476,226.679 L320.503,197.203 C320.979,197.250 321.457,197.284 321.944,197.284 M230.724,145.416 C239.032,145.416 245.910,139.312 247.115,131.347 L282.324,131.347 C284.107,135.343 288.106,138.133 292.766,138.133 C293.207,138.133 293.640,138.102 294.067,138.054 L312.773,170.437 C309.228,173.179 306.945,177.467 306.945,182.292 C306.945,187.875 309.998,192.738 314.524,195.320 L297.497,224.796 C297.021,224.750 296.543,224.715 296.056,224.715 C289.103,224.715 283.266,229.449 281.567,235.866 L242.929,235.866 C241.453,229.137 235.457,224.100 228.281,224.100 C227.235,224.100 226.214,224.208 225.227,224.411 L205.440,190.157 C206.523,188.732 207.175,186.961 207.175,185.032 C207.175,183.828 206.920,182.684 206.468,181.647 C206.106,179.987 205.304,178.490 204.185,177.290 L223.541,143.784 C225.714,144.830 228.150,145.416 230.724,145.416 M416.017,140.834 C423.094,140.834 429.013,135.928 430.590,129.335 L464.911,129.335 C466.648,136.628 473.196,142.060 481.025,142.060 C481.934,142.060 482.823,141.984 483.692,141.842 C483.860,141.848 484.028,141.855 484.198,141.855 C485.245,141.855 486.266,141.748 487.251,141.544 L507.039,175.797 C505.756,177.384 504.980,179.395 504.980,181.595 C504.980,184.038 505.932,186.254 507.478,187.910 L488.122,221.418 C485.949,220.371 483.511,219.785 480.937,219.785 C472.632,219.785 465.754,225.890 464.548,233.854 L428.676,233.854 C427.550,231.855 425.706,230.318 423.490,229.590 C422.257,228.889 420.833,228.486 419.312,228.486 C419.070,228.486 418.836,228.504 418.599,228.523 L399.033,194.652 C402.495,191.906 404.719,187.668 404.719,182.908 C404.719,177.444 401.789,172.674 397.419,170.054 L414.355,140.740 C414.900,140.800 415.454,140.834 416.017,140.834 M324.797,88.965 C333.102,88.965 339.981,82.860 341.186,74.896 L375.086,74.896 C376.419,81.809 382.499,87.034 389.805,87.034 C390.579,87.034 391.335,86.956 392.077,86.843 L407.483,113.514 C403.577,116.221 401.016,120.731 401.016,125.842 C401.016,131.305 403.945,136.076 408.314,138.697 L391.382,168.010 C390.834,167.950 390.281,167.917 389.719,167.917 C382.641,167.917 376.725,172.823 375.147,179.413 L336.665,179.413 C335.322,172.512 329.242,167.302 321.944,167.302 C320.899,167.302 319.877,167.409 318.891,167.613 L300.247,135.340 C302.673,133.242 304.214,130.150 304.214,126.691 C304.214,123.217 302.658,120.110 300.211,118.011 L317.868,87.446 C319.977,88.419 322.322,88.965 324.797,88.965 M512.421,81.635 C517.667,81.635 522.079,78.102 523.432,73.291 L563.835,73.291 C565.188,79.384 570.624,83.942 577.127,83.942 C578.549,83.942 579.921,83.723 581.210,83.319 L601.958,119.235 C600.411,120.892 599.460,123.107 599.460,125.551 C599.460,127.994 600.411,130.211 601.957,131.865 L582.601,165.373 C580.428,164.326 577.991,163.742 575.417,163.742 C567.112,163.742 560.233,169.845 559.027,177.810 L522.718,177.810 C521.268,174.579 518.028,172.324 514.255,172.324 C513.722,172.324 513.200,172.379 512.692,172.466 L493.248,138.809 C496.860,136.071 499.198,131.744 499.198,126.863 C499.198,122.712 497.504,118.955 494.775,116.242 C494.251,115.467 493.665,114.734 493.021,114.060 L511.771,81.602 C511.987,81.615 512.202,81.635 512.421,81.635 M229.771,33.144 C238.076,33.144 244.955,27.040 246.162,19.075 L283.509,19.075 C284.750,22.217 287.810,24.443 291.397,24.443 C291.997,24.443 292.581,24.380 293.144,24.261 L312.458,57.693 C308.550,60.401 305.990,64.911 305.990,70.021 C305.990,74.183 307.690,77.945 310.430,80.660 C311.094,81.809 311.891,82.872 312.801,83.825 L294.556,115.408 C293.972,115.314 293.378,115.252 292.766,115.252 C287.521,115.252 283.110,118.783 281.756,123.594 L246.436,123.594 C244.237,117.020 238.041,112.276 230.724,112.276 C228.715,112.276 226.788,112.635 225.006,113.289 C224.659,113.369 224.315,113.460 223.978,113.566 L203.230,77.650 C204.776,75.993 205.729,73.777 205.729,71.334 C205.729,68.891 204.777,66.675 203.231,65.019 L222.588,31.511 C224.760,32.558 227.197,33.144 229.771,33.144 M418.029,26.813 C423.275,26.813 427.686,23.281 429.039,18.471 L469.443,18.471 C470.796,24.563 476.231,29.121 482.735,29.121 C484.157,29.121 485.529,28.901 486.819,28.497 L505.603,61.018 C502.800,63.102 500.975,66.431 500.975,70.193 C500.975,73.668 502.530,76.775 504.976,78.873 L486.981,110.028 C485.131,109.316 483.126,108.920 481.025,108.920 C472.719,108.920 465.840,115.024 464.634,122.989 L430.736,122.989 C429.403,116.075 423.323,110.850 416.017,110.850 C415.243,110.850 414.488,110.928 413.745,111.041 L398.338,84.371 C402.245,81.663 404.805,77.154 404.805,72.043 C404.805,66.462 401.752,61.597 397.226,59.016 L415.942,26.614 C416.619,26.738 417.316,26.813 418.029,26.813 M229.771,0.005 C220.614,0.005 213.192,7.424 213.192,16.576 C213.192,21.008 214.938,25.032 217.775,28.005 L198.017,62.205 C197.508,62.118 196.987,62.063 196.454,62.063 C191.330,62.063 187.177,66.214 187.177,71.334 C187.177,76.455 191.330,80.605 196.454,80.605 C196.987,80.605 197.508,80.550 198.017,80.463 L218.853,116.529 C216.393,118.788 214.769,121.940 214.490,125.471 C214.266,126.561 214.146,127.689 214.146,128.847 C214.146,133.280 215.891,137.303 218.729,140.276 L198.972,174.477 C198.462,174.390 197.941,174.335 197.408,174.335 C192.753,174.335 188.912,177.763 188.244,182.228 L153.286,182.228 C151.709,174.717 145.046,169.076 137.063,169.076 C127.906,169.076 120.484,176.494 120.484,185.646 C120.484,190.079 122.229,194.101 125.066,197.075 L105.308,231.277 C104.800,231.188 104.278,231.133 103.745,231.133 C99.356,231.133 95.689,234.181 94.725,238.272 L58.807,238.272 C57.230,230.761 50.567,225.120 42.583,225.120 C33.426,225.120 26.004,232.538 26.004,241.689 C26.004,246.123 27.749,250.146 30.586,253.119 L10.830,287.320 C10.320,287.232 9.799,287.178 9.265,287.178 C4.142,287.178 -0.011,291.328 -0.011,296.449 C-0.011,301.569 4.142,305.720 9.265,305.720 C9.799,305.720 10.320,305.665 10.830,305.578 L31.665,341.643 C28.955,344.132 27.255,347.701 27.255,351.668 C27.255,359.184 33.353,365.278 40.873,365.278 C47.378,365.278 52.813,360.720 54.165,354.626 L94.497,354.626 C95.755,359.580 100.232,363.247 105.579,363.247 C106.001,363.247 106.418,363.222 106.828,363.177 L126.056,396.464 C123.347,398.953 121.647,402.523 121.647,406.489 C121.647,414.006 127.745,420.101 135.265,420.101 C141.770,420.101 147.206,415.542 148.557,409.449 L188.889,409.449 C190.147,414.400 194.625,418.069 199.971,418.069 C206.294,418.069 211.419,412.945 211.419,406.626 C211.419,403.151 209.862,400.044 207.415,397.947 L226.532,364.854 C227.078,364.916 227.632,364.948 228.195,364.948 C235.427,364.948 241.462,359.832 242.878,353.021 L276.980,353.021 C278.478,360.162 284.578,365.602 292.036,366.123 C293.592,366.670 295.264,366.971 297.009,366.971 C298.056,366.971 299.077,366.862 300.063,366.658 L319.851,400.913 C318.768,402.338 318.116,404.109 318.116,406.038 C318.116,410.722 321.916,414.520 326.603,414.520 C330.305,414.520 333.446,412.146 334.605,408.842 L372.004,408.842 C373.581,416.354 380.244,421.994 388.229,421.994 C397.386,421.994 404.808,414.575 404.808,405.425 C404.808,400.992 403.062,396.968 400.225,393.994 L419.983,359.795 C420.492,359.881 421.013,359.936 421.546,359.936 C426.670,359.936 430.823,355.786 430.823,350.666 C430.823,345.545 426.670,341.395 421.546,341.395 C421.013,341.395 420.492,341.450 419.983,341.537 L399.147,305.471 C401.607,303.211 403.231,300.059 403.509,296.529 C403.734,295.439 403.854,294.310 403.854,293.153 C403.854,288.719 402.108,284.697 399.271,281.723 L419.028,247.522 C419.538,247.609 420.059,247.665 420.592,247.665 C425.247,247.665 429.088,244.237 429.756,239.771 L464.714,239.771 C466.291,247.283 472.953,252.924 480.937,252.924 C490.094,252.924 497.516,245.505 497.516,236.354 C497.516,231.920 495.771,227.898 492.934,224.924 L512.692,190.723 C513.200,190.812 513.722,190.866 514.255,190.866 C518.644,190.866 522.310,187.818 523.275,183.728 L559.193,183.728 C560.770,191.239 567.433,196.879 575.417,196.879 C584.574,196.879 591.996,189.462 591.996,180.311 C591.996,175.877 590.251,171.854 587.414,168.881 L607.170,134.679 C607.680,134.767 608.201,134.822 608.735,134.822 C613.858,134.822 618.011,130.671 618.011,125.551 C618.011,120.431 613.858,116.280 608.735,116.280 C608.201,116.280 607.680,116.335 607.170,116.422 L586.335,80.357 C589.045,77.868 590.745,74.299 590.745,70.332 C590.745,62.815 584.647,56.721 577.127,56.721 C570.622,56.721 565.187,61.280 563.835,67.374 L523.503,67.374 C522.245,62.420 517.768,58.752 512.421,58.752 C511.999,58.752 511.582,58.778 511.172,58.823 L491.944,25.536 C494.653,23.047 496.353,19.477 496.353,15.511 C496.353,7.993 490.255,1.899 482.735,1.899 C476.230,1.899 470.794,6.458 469.443,12.551 L429.111,12.551 C427.853,7.600 423.375,3.931 418.029,3.931 C411.706,3.931 406.581,9.055 406.581,15.374 C406.581,18.848 408.138,21.955 410.585,24.052 L391.467,57.145 C390.922,57.084 390.367,57.052 389.805,57.052 C382.573,57.052 376.538,62.168 375.122,68.978 L341.020,68.978 C339.522,61.838 333.422,56.397 325.964,55.877 C324.408,55.330 322.736,55.029 320.991,55.029 C319.944,55.029 318.923,55.138 317.937,55.342 L298.148,21.086 C299.232,19.661 299.883,17.890 299.883,15.962 C299.883,11.277 296.084,7.480 291.397,7.480 C287.695,7.480 284.554,9.854 283.395,13.158 L245.995,13.158 C244.419,5.646 237.756,0.005 229.771,0.005 "></path>
                        </svg>
                    </div>
                </div>
                <div class="decor-2">
                    <div class="layer" data-depth="0.14">
                        <svg class="plus" width="253px" height="253px" viewbox="0 0 253 253">
                            <path fill-rule="evenodd" fill="rgb(245, 246, 250)" d="M173.937,0.003 L79.063,0.003 L79.063,79.062 L0.003,79.062 L0.003,173.936 L79.063,173.936 L79.063,252.997 L173.937,252.997 L173.937,173.936 L252.997,173.936 L252.997,79.062 L173.937,79.062 L173.937,0.003 "></path>
                        </svg>
                    </div>
                </div>
                <div class="decor-3">
                    <div class="layer" data-depth="0.16">
                        <svg class="plus" width="239px" height="238px" viewbox="0 0 239 238">
                            <path fill-rule="evenodd" fill="rgb(247, 248, 252)" d="M10.508,156.748 L10.508,81.253 L81.754,81.253 L81.754,10.007 L157.249,10.007 L157.249,81.253 L228.495,81.253 L228.495,156.745 L157.249,156.748 L157.249,227.995 L81.754,227.995 L81.754,156.748 L10.508,156.748 M167.249,0.005 L71.752,0.005 L71.752,71.251 L0.506,71.251 L0.506,166.750 L71.752,166.750 L71.752,237.995 L167.249,237.995 L167.249,166.750 L238.494,166.750 L238.494,71.251 L233.496,71.251 L233.496,76.252 L233.496,71.251 L167.249,71.251 L167.249,0.005 "></path>
                        </svg>
                    </div>
                </div>
                <div class="decor-4">
                    <div class="layer" data-depth="0.13">
                        <svg class="plus" width="253px" height="253px" viewbox="0 0 253 253">
                            <path fill-rule="evenodd" fill="rgb(245, 246, 250)" d="M173.937,0.003 L79.063,0.003 L79.063,79.062 L0.003,79.062 L0.003,173.936 L79.063,173.936 L79.063,252.997 L173.937,252.997 L173.937,173.936 L252.997,173.936 L252.997,79.062 L173.937,79.062 L173.937,0.003 "></path>
                        </svg>
                    </div>
                </div>
                <div class="decor-5">
                    <div class="layer" data-depth="0.2">
                        <svg class="plus" width="253px" height="253px" viewbox="0 0 253 253">
                            <path fill-rule="evenodd" fill="rgb(245, 246, 250)" d="M173.937,0.003 L79.063,0.003 L79.063,79.062 L0.003,79.062 L0.003,173.936 L79.063,173.936 L79.063,252.997 L173.937,252.997 L173.937,173.936 L252.997,173.936 L252.997,79.062 L173.937,79.062 L173.937,0.003 "></path>
                        </svg>
                    </div>
                </div>
            </div>
        </section>

        <!-- Small Features-->
        <section class="section section-lg bg-gray-100">
            <div class="container">
                <div class="row row-30">
                    <div class="col-sm-6 col-lg-4 wow-outer">
                        <!-- Box Minimal-->
                        <article class="box-minimal">
                            <div class="box-minimal-icon fl-bigmug-line-favourites5 wow fadeIn"></div>
                            <div class="box-minimal-main wow-outer">
                                <h4 class="box-minimal-title wow slideInDown">Інноваційні методи</h4>
                                <p class="wow fadeInUpSmall">Ми застосовуємо сучасні наукові підходи та передові технології, які забезпечують високу точність, надійність і швидкість досліджень. Інновації – це основа нашої роботи.</p>
                            </div>
                        </article>
                    </div>

                    <div class="col-sm-6 col-lg-4 wow-outer">
                        <!-- Box Minimal-->
                        <article class="box-minimal">
                            <div class="box-minimal-icon fl-bigmug-line-gear30 wow fadeIn" data-wow-delay=".2s"></div>
                            <div class="box-minimal-main wow-outer">
                                <h4 class="box-minimal-title wow slideInDown" data-wow-delay=".2s">Сучасне обладнання</h4>
                                <p class="wow fadeInUpSmall" data-wow-delay=".2s">Ми використовуємо тільки новітнє обладнання та якісні реагенти, що дозволяє досягати результатів, які відповідають міжнародним стандартам.</p>
                            </div>
                        </article>
                    </div>

                    <div class="col-sm-6 col-lg-4 wow-outer">
                        <!-- Box Minimal-->
                        <article class="box-minimal">
                            <div class="box-minimal-icon fl-bigmug-line-user144 wow fadeIn" data-wow-delay=".1s"></div>
                            <div class="box-minimal-main wow-outer">
                                <h4 class="box-minimal-title wow slideInDown" data-wow-delay=".1s">Кваліфікований персонал</h4>
                                <p class="wow fadeInUpSmall" data-wow-delay=".1s">Наша команда складається з провідних спеціалістів у галузі медицини, ветеринарії та харчових технологій. Ми об'єднали найкращих експертів, які постійно вдосконалюють свої знання.</p>
                            </div>
                        </article>
                    </div>

                </div>
            </div>
        </section>
        <!-- Advantages and Achievements-->
        <section class="section section-lg text-center">
            <div class="container">
                <h3 class="wow-outer"><span class="wow slideInUp">Переваги та досягнення</span></h3>
                <p class="wow-outer"><span class="text-width-1 wow slideInDown">Лабораторія "Лімарія" – це амбіційний проєкт, який за дуже короткий час вже встиг здобути довіру клієнтів. Ми впевнено впроваджуємо сучасні технології та підходи, щоб створювати якісні рішення у мікробіології.</span></p>
                <div class="row row-30">
                    <div class="col-6 col-md-3 wow-outer">
                        <!-- Counter Minimal-->
                        <article class="counter-minimal wow slideInDown">
                            <div class="counter-minimal-icon fl-bigmug-line-circular220"></div>
                            <div class="counter-minimal-main">
                                <div class="counter">1000+</div><span>+</span>
                            </div>
                            <h5 class="counter-minimal-title">Проведених досліджень з високою точністю результатів.</h5>
                        </article>
                    </div>
                    <div class="col-6 col-md-3 wow-outer">
                        <!-- Counter Minimal-->
                        <article class="counter-minimal wow slideInDown">
                            <div class="counter-minimal-icon fl-bigmug-line-graphical8"></div>
                            <div class="counter-minimal-main">
                                <div class="counter">6</div>
                            </div>
                            <h5 class="counter-minimal-title">місяців наполегливої роботи, спрямованої на забезпечення високих стандартів якості.
                            </h5>
                        </article>
                    </div>
                    <div class="col-6 col-md-3 wow-outer">
                        <!-- Counter Minimal-->
                        <article class="counter-minimal wow slideInDown">
                            <div class="counter-minimal-icon fl-bigmug-line-favourites5"></div>
                            <div class="counter-minimal-main">
                                <div class="counter">20</div><span>+</span>
                            </div>
                            <h5 class="counter-minimal-title">Експертів, які об'єдналися, щоб зробити інновації доступними.</h5>
                        </article>
                    </div>
                    <div class="col-6 col-md-3 wow-outer">
                        <!-- Counter Minimal-->
                        <article class="counter-minimal wow slideInDown">
                            <div class="counter-minimal-icon fl-bigmug-line-user144"></div>
                            <div class="counter-minimal-main">
                                <div class="counter">10</div><span>+</span>
                            </div>
                            <h5 class="counter-minimal-title">Партнерів у сфері медицини, ветеринарії та харчової промисловості.</h5>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA Thin-->
        <section class="section section-xs bg-secondary text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-10 col-md-12">
                        <div class="box-cta-thin">
                            <h4 class="wow-outer"><span class="wow slideInRight">Дізнайтесь вартість наших <span class="font-weight-bold">дослідницьких послуг</span> прямо зараз!</span></h4>
                            <div class="wow-outer button-outer"><a class="button button-primary button-winona wow slideInLeft" href="#price_section">Дiзнатись всi цiни</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- What We Offer-->
        <section class="section section-lg bg-gray-100 text-center">
            <div class="container">
                <h3 class="wow-outer"><span class="wow slideInUp">Що ми пропонуємо</span></h3>
                <div class="row row-30">
                    <div class="col-sm-6 col-lg-4 wow-outer">
                        <!-- Box Creative-->
                        <article class="box-creative wow slideInDown">
                            <div class="box-creative-icon fl-bigmug-line-search74"></div>
                            <h4 class="box-creative-title">Швидкісний аналіз результатів</h4>
                            <p>Ми пропонуємо точні аналізи, які дозволяють отримати результати у найкоротші терміни, що важливо для термінових діагностичних потреб.</p>
                        </article>
                    </div>
                    <div class="col-sm-6 col-lg-4 wow-outer">
                        <!-- Box Creative-->
                        <article class="box-creative wow slideInDown" data-wow-delay=".05s">
                            <div class="box-creative-icon fl-bigmug-line-book188"></div>
                            <h4 class="box-creative-title">Мікробіологічні дослідження</h4>
                            <p>Наша лабораторія виконує широкий спектр мікробіологічних аналізів: від харчової галузі до медицини, забезпечуючи якісні та точні результати для ваших бізнесових та побутових потреб. </p>
                        </article>
                    </div>
                    <div class="col-sm-6 col-lg-4 wow-outer">
                        <!-- Box Creative-->
                        <article class="box-creative wow slideInDown" data-wow-delay=".1s">
                            <div class="box-creative-icon fl-bigmug-line-two317"></div>
                            <h4 class="box-creative-title">Технології нового покоління</h4>
                            <p>Завдяки сучасному обладнанню та методам, ми гарантуємо надійність результатів і швидкість виконання кожного замовлення.</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- Projects-->
        <section class="section section-lg text-center" id="price_section">
            <div class="container">
                <h3 class="wow-outer"><span class="wow slideInUp">Оберіть напрямок, щоб дізнатися послуги</span></h3>
                <p class="wow-outer"><span class="text-width-1 wow slideInDown">Ознайомтесь з переліком наших мікробіологічних досліджень та інших високоякісних наукових рішень, які ми пропонуємо нашим клієнтам по всьому світу з моменту нашого заснування.</span></p>
                <div class="row row-30 justify-content-center">
                    <div class="col-sm-6 col-lg-5 col-xl-4 wow-outer">
                        <!-- Thumbnail Modern--><a class="thumbnail-modern wow slideInLeft" href="{{ route('medical.index') }}"><img loading="lazy" class="thumbnail-modern-image" src="{{asset('images/grid-layout-1-370x256.webp')}}" alt="Медичне обладнання" width="370" height="256"/>
                            <div class="thumbnail-modern-caption">
                                <p class="thumbnail-modern-title">Медична діагностика</p>
                                <p class="thumbnail-modern-text">Ми проводимо точні мікробіологічні дослідження для складних випадків, забезпечуючи швидкі та достовірні результати. Досліджуємо зразки крові, сечі, мокротиння, ранового матеріалу та іншого біологічного матеріалу.</p>
                            </div>
                            <div class="thumbnail-modern-dummy"></div></a>
                    </div>
                    <div class="col-sm-6 col-lg-5 col-xl-4 wow-outer">
                        <!-- Thumbnail Modern--><a class="thumbnail-modern wow slideInLeft" href="{{ route("veterinary.index") }}"><img loading="lazy" class="thumbnail-modern-image" src="{{asset('images/grid-layout-2-370x256.webp')}}" alt="Взяття зразку для аналізу з тварини" width="370" height="256"/>
                            <div class="thumbnail-modern-caption">
                                <p class="thumbnail-modern-title">Ветеринарна діагностика</p>
                                <p class="thumbnail-modern-text">Спеціалізовані мікробіологічні аналізи для здоров'я ваших тварин. Виявлення збудників хвороб з високою точністю гарантує ефективне лікування для домашніх улюбленців і сільськогосподарських тварин.</p>
                            </div>
                            <div class="thumbnail-modern-dummy"></div></a>
                    </div>
                    <div class="col-sm-6 col-lg-5 col-xl-4 wow-outer">
                        <a class="thumbnail-modern wow slideInLeft" href="{{ route('food.index') }}"><img loading="lazy" class="thumbnail-modern-image" src="{{asset('images/grid-layout-3-370x256.webp')}}" alt="Дослідження продуктів в лабораторії" width="370" height="256"/>
                            <div class="thumbnail-modern-caption">
                                <p class="thumbnail-modern-title">Дослідження харчових продуктів</p>
                                <p class="thumbnail-modern-text">Забезпечуємо безпеку харчових продуктів завдяки сучасним мікробіологічним дослідженням. Ми допомагаємо контролювати якість і відповідність продукції найвищим стандартам.</p>
                            </div>
                            <div class="thumbnail-modern-dummy"></div></a>
                    </div>
                    <!-- <div class="col-sm-6 col-lg-5 col-xl-4 wow-outer">
                            <a class="thumbnail-modern wow slideInRight" href="#"><img class="thumbnail-modern-image" src="images/grid-layout-4-370x256.jpg" alt="" width="370" height="256"/>
                              <div class="thumbnail-modern-caption">
                                <p class="thumbnail-modern-title">Parasitology</p>
                                <p class="thumbnail-modern-text">Performing standard analysis of specimen for bacterial, parasitic and T8 infection as well as studying unicellular or cell-cluster microscopic organisms.</p>
                              </div>
                              <div class="thumbnail-modern-dummy"></div></a>
                    </div> -->
                    <!-- <div class="col-sm-6 col-lg-5 col-xl-4 wow-outer">
                            <a class="thumbnail-modern wow slideInRight" href="#"><img class="thumbnail-modern-image" src="images/grid-layout-5-370x256.jpg" alt="" width="370" height="256"/>
                              <div class="thumbnail-modern-caption">
                                <p class="thumbnail-modern-title">Histology and Cytology</p>
                                <p class="thumbnail-modern-text">Histology and cytology department serves all local hospitals. Surgical specimens are processed and read by highly qualified histology specialists and cytopathologists.</p>
                              </div>
                              <div class="thumbnail-modern-dummy"></div></a>
                    </div> -->
                    <!-- <div class="col-sm-6 col-lg-5 col-xl-4 wow-outer">
                            <a class="thumbnail-modern wow slideInRight" href="#"><img class="thumbnail-modern-image" src="images/grid-layout-6-370x256.jpg" alt="" width="370" height="256"/>
                              <div class="thumbnail-modern-caption">
                                <p class="thumbnail-modern-title">Microbiology</p>
                                <p class="thumbnail-modern-text">Microbiology specializes in the diagnosis of Bacteriology and Tuberculosis, aerobic and anaerobic bacterial cultures and drug susceptibility testing.</p>
                              </div>
                              <div class="thumbnail-modern-dummy"></div></a>
                    </div> -->
                </div>
            </div>
        </section>
        <!-- A Few Words About Us-->
        <section class="section bg-gray-100">
            <div class="range justify-content-xl-between">
                <div class="cell-lg-6 cell-xl-5 align-self-center container">
                    <div class="row">
                        <div class="col-md-10 cell-inner">
                            <div class="section-lg inset-right-2">
                                <h3 class="wow-outer"><span class="wow slideInDown">Декілька слів про Нас</span></h3>
                                <p class="wow fadeIn">Лабораторія "Лімарія" була заснована з метою надання висококласних наукових та дослідницьких послуг. Ми зарекомендували себе як провідний партнер у галузях медицини, ветеринарії та харчових технологій. Наша лабораторія спеціалізується на точних діагностичних дослідженнях та інноваційних наукових рішеннях, що забезпечують високий рівень якості та надійності результатів.</p>
                                <div class="progress-linear-outer">
                                    <!-- Linear progress bar-->
                                    <article class="progress-linear">
                                        <div class="progress-header">
                                            <p>Мікробіологія</p><span class="progress-value">100</span>
                                        </div>
                                        <div class="progress-bar-linear-wrap">
                                            <div class="progress-bar-linear"></div>
                                        </div>
                                    </article>
                                </div>
                                <div class="progress-linear-outer">
                                    <!-- Linear progress bar-->
                                    <article class="progress-linear">
                                        <div class="progress-header">
                                            <p>Медицина</p><span class="progress-value">100</span>
                                        </div>
                                        <div class="progress-bar-linear-wrap">
                                            <div class="progress-bar-linear"></div>
                                        </div>
                                    </article>
                                </div>
                                <div class="progress-linear-outer">
                                    <!-- Linear progress bar-->
                                    <article class="progress-linear">
                                        <div class="progress-header">
                                            <p>Ветеринарія</p><span class="progress-value">100</span>
                                        </div>
                                        <div class="progress-bar-linear-wrap">
                                            <div class="progress-bar-linear"></div>
                                        </div>
                                    </article>
                                </div>
                                <div class="progress-linear-outer">
                                    <!-- Linear progress bar-->
                                    <article class="progress-linear">
                                        <div class="progress-header">
                                            <p>Харчові дослідження</p><span class="progress-value">100</span>
                                        </div>
                                        <div class="progress-bar-linear-wrap">
                                            <div class="progress-bar-linear"></div>
                                        </div>
                                    </article>
                                </div>
                                <!-- <div class="wow-outer button-outer"><a class="button button-primary button-winona wow slideInUp" href="about-us.html">Дізнатись більше</a></div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cell-lg-6 height-fill">
                    <div class="figure-card">
                        <div class="figure-card-sizer"></div><img loading="lazy"  src="{{asset('images/photo_2025-01-09_10-20-30.webp')}}" alt="Лаборант в білому халаті" width="960" height="792"/>
                    </div>
                </div>
            </div>
        </section>
        <!-- Man CTA-->
        <section class="section section-xl bg-secondary bg-image bg-image-1" style="background-image: url({{asset('images/call-to-action-2-1920x584.webp')}}); ">
            <div class="container">
                <div class="row justify-content-sm-end">
                    <div class="col-sm-9 col-md-7 col-lg-6">
                        <div class="box-2">
                            <div class="wow-outer">
                                <div class="wow slideInUp">
                                    <h3 class="font-weight-bold" style="margin-left: 150px; color: #07402F">Ми надаємо надійні та доступні наукові дослідницькі послуги</h3>
                                </div>
                            </div>
                            <div class="wow-outer offset-top-4">
                                <div class="wow slideInDown" style="margin-left: 150px; color: #07402F">
                                    <p>Лабораторні послуги "Лімарія" відзначаються доступною ціною та проводяться в надсучасних приміщеннях, обладнаних передовими автоматизованими системами, що регулярно обслуговуються для забезпечення найвищої якості досліджень.</p>
                                    <!-- <a class="button button-primary button-winona" href="#">Дiзнатись бiльше</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Recent News-->
        <section class="section section-lg text-center">
            <div class="container">
                <h3 class="wow-outer"><span class="wow slideInDown">Останні новини</span></h3>
                <div class="row row-30 justify-content-center">
                    <div class="col-sm-6 col-md-5 col-lg-3 wow-outer">
                        <!-- Post Tiny-->
                        <article class="post-tiny wow fadeSlideInDown"><a class="post-tiny-media" target="_blank" href="https://www.instagram.com/p/DDjxXJxiQT3/?igsh=MWN2N2p2b2c5cmdncw=="><img loading="lazy" src="{{asset('images/photo_2024-12-20_13-51-05.webp')}}" alt="Чашка петрі" width="270" height="184"/></a>
                            <h5 class="post-tiny-title"><a target="_blank" href="https://www.instagram.com/p/DDjxXJxiQT3/?igsh=MWN2N2p2b2c5cmdncw==">Exophiala Spinifera</a></h5>
{{--                            <time class="post-tiny-time" datetime="2019">2 days ago</time>--}}
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-5 col-lg-3 wow-outer">
                        <!-- Post Tiny-->
                        <article class="post-tiny wow fadeSlideInDown" data-wow-delay=".05s"><a class="post-tiny-media" target="_blank" href="https://www.youtube.com/watch?v=ZhJXxUf_WGQ&ab_channel=LimariaLaboratory"><img loading="lazy" src="{{asset('images/photo_2024-12-20_13-55-29.webp')}}" alt="Ідентифікація Maldi-Tof" width="270" height="184"/></a>
                            <h5 class="post-tiny-title"><a target="_blank" href="https://www.youtube.com/watch?v=ZhJXxUf_WGQ&ab_channel=LimariaLaboratory">Як відбувається ідентифікація на MALDI-TOF </a></h5>
{{--                            <time class="post-tiny-time" datetime="2019">h</time>--}}
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-5 col-lg-3 wow-outer">
                        <!-- Post Tiny-->
                        <article class="post-tiny wow fadeSlideInDown" data-wow-delay=".1s"><a target="_blank" class="post-tiny-media" href="https://t.me/LimariaLaboratory/35"><img loading="lazy" src="{{asset('images/photo_2024-12-20_14-18-00.webp')}}" alt="Дослідження хмільного напою" width="270" height="184"/></a>
                            <h5 class="post-tiny-title"><a  target="_blank" href="https://t.me/LimariaLaboratory/35">Наші дослідження продуктів бродіння</a></h5>
{{--                            <time class="post-tiny-time" datetime="2019">2 days ago</time>--}}
                        </article>
                    </div>
{{--                    <div class="col-sm-6 col-md-5 col-lg-3 wow-outer">--}}
{{--                        <!-- Post Tiny-->--}}
{{--                        <article class="post-tiny wow fadeSlideInDown" data-wow-delay=".15s"><a class="post-tiny-media" href="single-blog-post.html"><img src="images/blog-layouts-4-270x184.jpg" alt="" width="270" height="184"/></a>--}}
{{--                            <h5 class="post-tiny-title"><a href="single-blog-post.html">How Biosimilars Could Impact Clinical Trials</a></h5>--}}
{{--                            <time class="post-tiny-time" datetime="2019">2 days ago</time>--}}
{{--                        </article>--}}
{{--                    </div>--}}
                </div>
                <!-- <div class="wow-outer button-outer"><a class="button button-default-outline button-winona wow slideInUp" href="grid-blog.html">Переглянути всі новини</a></div> -->
            </div>
        </section>
        <!-- Testimonials-->
        <!-- <section class="section section-lg bg-gray-100 text-center"> -->
        <!-- <div class="container">
          <h3 class="wow-outer"><span class="wow slideInDown">Testimonials</span></h3>
          <div class="slick-widget-testimonials wow fadeIn">
            <div class="slick-slider carousel-child" id="child-carousel" data-for=".carousel-parent" data-arrows="true" data-loop="true" data-dots="false" data-swipe="true" data-items="1" data-sm-items="3" data-md-items="5" data-lg-items="5" data-xl-items="5" data-center-mode="true" data-slide-to-scroll="1">
              <div class="item"><img src="images/testimonials-person-1-96x96.jpg" alt="" width="96" height="96"/>
              </div>
              <div class="item"><img src="images/testimonials-person-2-96x96.jpg" alt="" width="96" height="96"/>
              </div>
              <div class="item"><img src="images/testimonials-person-3-96x96.jpg" alt="" width="96" height="96"/>
              </div>
              <div class="item"><img src="images/testimonials-person-4-96x96.jpg" alt="" width="96" height="96"/>
              </div>
              <div class="item"><img src="images/testimonials-person-5-96x96.jpg" alt="" width="96" height="96"/>
              </div>
              <div class="item"><img src="images/testimonials-person-6-96x96.jpg" alt="" width="96" height="96"/>
              </div>
            </div> -->
        <!-- Slick Carousel-->
        <!-- <div class="slick-slider carousel-parent" data-arrows="false" data-loop="true" data-dots="false" data-swipe="false" data-items="1" data-fade="true" data-child="#child-carousel" data-for="#child-carousel">
          <div class="item">

            <blockquote class="quote-light">
              <cite class="quote-light-cite">Kelly McMillan</cite>
              <p class="quote-light-caption">Regular Client</p>
              <svg class="quote-light-mark" x="0px" y="0px" width="35px" height="25px" viewbox="0 0 35 25">
                <path d="M27.461,10.206h7.5v15h-15v-15L25,0.127h7.5L27.461,10.206z M7.539,10.206h7.5v15h-15v-15L4.961,0.127h7.5                L7.539,10.206z"></path>
              </svg>
              <div class="quote-light-text">
                <p>I greatly appreciate the communication on the process, what I needed to do in terms of providing samples, what to expect. Scientar provided what I needed in terms of research.</p>
              </div>
            </blockquote>
          </div>
          <div class="item">

            <blockquote class="quote-light">
              <cite class="quote-light-cite">Harold Barnett</cite>
              <p class="quote-light-caption">Regular Client</p>
              <svg class="quote-light-mark" x="0px" y="0px" width="35px" height="25px" viewbox="0 0 35 25">
                <path d="M27.461,10.206h7.5v15h-15v-15L25,0.127h7.5L27.461,10.206z M7.539,10.206h7.5v15h-15v-15L4.961,0.127h7.5                L7.539,10.206z"></path>
              </svg>
              <div class="quote-light-text">
                <p>I would like to thank Scientar for their service to the community and patients of our clinic. They are our very responsible partners in the medical community that are hard to meet nowadays.</p>
              </div>
            </blockquote>
          </div>
          <div class="item">

            <blockquote class="quote-light">
              <cite class="quote-light-cite">Albert Webb</cite>
              <p class="quote-light-caption">Regular Client</p>
              <svg class="quote-light-mark" x="0px" y="0px" width="35px" height="25px" viewbox="0 0 35 25">
                <path d="M27.461,10.206h7.5v15h-15v-15L25,0.127h7.5L27.461,10.206z M7.539,10.206h7.5v15h-15v-15L4.961,0.127h7.5                L7.539,10.206z"></path>
              </svg>
              <div class="quote-light-text">
                <p>The quality of your report and your results made it easy to identify potential problems. The work on microbiology research was well documented, the best I have seen from a commercial lab.</p>
              </div>
            </blockquote>
          </div>
          <div class="item">

            <blockquote class="quote-light">
              <cite class="quote-light-cite">Samantha Lee</cite>
              <p class="quote-light-caption">Regular Client</p>
              <svg class="quote-light-mark" x="0px" y="0px" width="35px" height="25px" viewbox="0 0 35 25">
                <path d="M27.461,10.206h7.5v15h-15v-15L25,0.127h7.5L27.461,10.206z M7.539,10.206h7.5v15h-15v-15L4.961,0.127h7.5                L7.539,10.206z"></path>
              </svg>
              <div class="quote-light-text">
                <p>For more than 3 years now, your lab is not only a referral laboratory but a real partner during our journey to success in our chemistry research. Thank you for proper assistance!</p>
              </div>
            </blockquote>
          </div>
          <div class="item">

            <blockquote class="quote-light">
              <cite class="quote-light-cite">Bill Warner</cite>
              <p class="quote-light-caption">Regular Client</p>
              <svg class="quote-light-mark" x="0px" y="0px" width="35px" height="25px" viewbox="0 0 35 25">
                <path d="M27.461,10.206h7.5v15h-15v-15L25,0.127h7.5L27.461,10.206z M7.539,10.206h7.5v15h-15v-15L4.961,0.127h7.5                L7.539,10.206z"></path>
              </svg>
              <div class="quote-light-text">
                <p>Scientar is one of the most powerful laboratories in our region and their branch offices throughout the US have the same strong human resources and amazing equipment.</p>
              </div>
            </blockquote>
          </div>
          <div class="item">

            <blockquote class="quote-light">
              <cite class="quote-light-cite">John Wilson</cite>
              <p class="quote-light-caption">Regular Client</p>
              <svg class="quote-light-mark" x="0px" y="0px" width="35px" height="25px" viewbox="0 0 35 25">
                <path d="M27.461,10.206h7.5v15h-15v-15L25,0.127h7.5L27.461,10.206z M7.539,10.206h7.5v15h-15v-15L4.961,0.127h7.5                L7.539,10.206z"></path>
              </svg>
              <div class="quote-light-text">
                <p>Your member has the breadth and depth of press, media and analyst relationships that I grew used to at big companies. You are a great partner and an integral part of our success!</p>
              </div>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
  </section> -->
        <!-- Partners-->
        <section class="section section-sm text-center">
            <div class="container">
                <!-- Owl Carousel-->
                <p class="font-weight-bold" style="font-size: 43px">Наші партнери</p>
                <div class="owl-carousel owl-carousel-1" data-items="2" data-sm-items="3" data-md-items="4" data-lg-items="2" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="false" data-margin="30" data-mouse-drag="false">
                    <div class="item wow-outer">
                        <div class="wow slideInLeft"><a target="_blank" class="link-image" href="https://neolab.com.ua/"><img loading="lazy" src="{{asset('images/neolab-logo.webp')}}" alt="Логотип Неолаб" width="135" height="87"/></a></div>
                    </div>
                    <div class="item wow-outer">
                        <div class="wow slideInLeft" data-wow-delay=".05s"><a target="_blank" class="link-image" href="https://biola.ua/ua/"><img loading="lazy" src="{{asset('images/biola-logo.webp')}}" alt="Логотип Біола" width="134" height="104"/></a></div>
                    </div>
{{--                    <div class="item wow-outer">--}}
{{--                        <div class="wow slideInLeft" data-wow-delay=".1s"><a class="link-image" href="#"><img src="images/logo-havana-cabana-132x87.png" alt="" width="132" height="87"/></a></div>--}}
{{--                    </div>--}}
{{--                    <div class="item wow-outer">--}}
{{--                        <div class="wow slideInLeft" data-wow-delay=".15s"><a class="link-image" href="#"><img src="images/logo-brownie-143x85.png" alt="" width="143" height="85"/></a></div>--}}
{{--                    </div>--}}
{{--                    <div class="item wow-outer">--}}
{{--                        <div class="wow slideInLeft" data-wow-delay=".2s"><a class="link-image" href="#"><img src="images/logo-hillplan-111x85.png" alt="" width="111" height="85"/></a></div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </section>
{{--        <section class="section section-xs bg-secondary text-center">--}}
{{--          <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--              <div class="col-sm-10 col-md-12">--}}
{{--                <div class="box-cta-thin">--}}
{{--                  <h4 class="wow-outer"><span class="wow slideInRight">Improve Your Clinic’s <span class="font-weight-bold">Laboratory Testing Solutions</span> Now!</span></h4>--}}
{{--                  <div class="wow-outer button-outer"><a class="button button-primary button-winona wow slideInLeft" href="#">Learn more</a></div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </section>--}}

        <section class="section bg-gray-100">
            <div class="range justify-content-xl-between">
                <div class="cell-xl-6 align-self-center container">
                    <div class="row">
                        <div class="col-lg-9 cell-inner">
                            <div class="section-lg">
                                <h3 class="wow-outer"><span class="wow slideInDown">Звязатись з нами</span></h3>
                                <!-- RD Mail form-->
                                    @include("partials.feedback_form")
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cell-xl-5 height-fill wow fadeIn">
                    @include("partials.googlemap")
                    <!--Please, add the data attribute data-key="AIzaSyBIqAecnXVJZ53cVWY2hXbf30DIYaJUYNM" in order to insert your own API key for the Google map.-->
                    <!--Example: <div class="google-map-container" data-key="YOUR_API_KEY">-->
                    <!-- <div class="google-map-container" data-key="AIzaSyBIqAecnXVJZ53cVWY2hXbf30DIYaJUYNM" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-zoom="5" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png" >
                      <div class="google-map"></div>
                      <ul class="google-map-markers">
                        <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"></li>
                      </ul>
                    </div> -->
                </div>
            </div>
        </section>
        <!-- Page Footer-->
@endsection

