<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>StoryConnect</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="top-nav">
        <a href="#" class="brand">
            <picture>
                <?xml version="1.0" encoding="UTF-8"?>
                <svg width="115px" height="40px" viewBox="-31.5 0 319 319" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    preserveAspectRatio="xMidYMid">
                    <defs>
                        <path
                            d="M9.87245893,293.324145 L0.0114611411,30.5732167 C-0.314208957,21.8955842 6.33948896,14.5413918 15.0063196,13.9997149 L238.494389,0.0317105427 C247.316188,-0.519651867 254.914637,6.18486163 255.466,15.0066607 C255.486773,15.339032 255.497167,15.6719708 255.497167,16.0049907 L255.497167,302.318596 C255.497167,311.157608 248.331732,318.323043 239.492719,318.323043 C239.253266,318.323043 239.013844,318.317669 238.774632,318.306926 L25.1475605,308.712253 C16.8276309,308.338578 10.1847994,301.646603 9.87245893,293.324145 L9.87245893,293.324145 Z"
                            id="path-1">

                        </path>
                    </defs>
                    <g>
                        <mask id="mask-2" fill="white">
                            <use xlink:href="#path-1">

                            </use>
                        </mask>
                        <use fill="#FF4785" fill-rule="nonzero" xlink:href="#path-1">

                        </use>
                        <path
                            d="M188.665358,39.126973 L190.191903,2.41148534 L220.883535,0 L222.205755,37.8634126 C222.251771,39.1811466 221.22084,40.2866846 219.903106,40.3327009 C219.338869,40.3524045 218.785907,40.1715096 218.342409,39.8221376 L206.506729,30.4984116 L192.493574,41.1282444 C191.443077,41.9251106 189.945493,41.7195021 189.148627,40.6690048 C188.813185,40.2267976 188.6423,39.6815326 188.665358,39.126973 Z M149.413703,119.980309 C149.413703,126.206975 191.355678,123.222696 196.986019,118.848893 C196.986019,76.4467826 174.234041,54.1651411 132.57133,54.1651411 C90.9086182,54.1651411 67.5656805,76.7934542 67.5656805,110.735941 C67.5656805,169.85244 147.345341,170.983856 147.345341,203.229219 C147.345341,212.280549 142.913138,217.654777 133.162291,217.654777 C120.456641,217.654777 115.433477,211.165914 116.024438,189.103298 C116.024438,184.317101 67.5656805,182.824962 66.0882793,189.103298 C62.3262146,242.56887 95.6363019,257.990394 133.753251,257.990394 C170.688279,257.990394 199.645341,238.303123 199.645341,202.663511 C199.645341,139.304202 118.683759,141.001326 118.683759,109.604526 C118.683759,96.8760922 128.139127,95.178968 133.753251,95.178968 C139.662855,95.178968 150.300143,96.2205679 149.413703,119.980309 Z"
                            fill="#FFFFFF" fill-rule="nonzero" mask="url(#mask-2)">

                        </path>
                    </g>
                </svg>
            </picture>
        </a>
        <form class="search">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path
                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
            </svg>
            <input type="text" name="search" placeholder="Search" />
        </form>
        <div class="settings">
            <a href="./logout.php"><button id="logout"><b>Log out</b></button></a>
        </div>
    </nav>

    <div class="container">
        <nav class="sidebar-left">
            <div class="sidebar-left_home">
                <a href="index.php" tabindex="-1">
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path
                                d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                        </svg>
                        <p>Home</p>
                    </button>
                </a>
            </div>
            <hr>
            <div class="sidebar-left_topics">
                <h4>Genres</h4>
                <details>
                    <summary>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                            <path
                                d="M192 64C86 64 0 150 0 256S86 448 192 448H448c106 0 192-86 192-192s-86-192-192-192H192zM496 168a40 40 0 1 1 0 80 40 40 0 1 1 0-80zM392 304a40 40 0 1 1 80 0 40 40 0 1 1 -80 0zM168 200c0-13.3 10.7-24 24-24s24 10.7 24 24v32h32c13.3 0 24 10.7 24 24s-10.7 24-24 24H216v32c0 13.3-10.7 24-24 24s-24-10.7-24-24V280H136c-13.3 0-24-10.7-24-24s10.7-24 24-24h32V200z" />
                        </svg>
                        <p>Horror</p>
                    </summary>
                </details>
                <details>
                    <summary>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path
                                d="M417.3 360.1l-71.6-4.8c-5.2-.3-10.3 1.1-14.5 4.2s-7.2 7.4-8.4 12.5l-17.6 69.6C289.5 445.8 273 448 256 448s-33.5-2.2-49.2-6.4L189.2 372c-1.3-5-4.3-9.4-8.4-12.5s-9.3-4.5-14.5-4.2l-71.6 4.8c-17.6-27.2-28.5-59.2-30.4-93.6L125 228.3c4.4-2.8 7.6-7 9.2-11.9s1.4-10.2-.5-15l-26.7-66.6C128 109.2 155.3 89 186.7 76.9l55.2 46c4 3.3 9 5.1 14.1 5.1s10.2-1.8 14.1-5.1l55.2-46c31.3 12.1 58.7 32.3 79.6 57.9l-26.7 66.6c-1.9 4.8-2.1 10.1-.5 15s4.9 9.1 9.2 11.9l60.7 38.2c-1.9 34.4-12.8 66.4-30.4 93.6zM256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm14.1-325.7c-8.4-6.1-19.8-6.1-28.2 0L194 221c-8.4 6.1-11.9 16.9-8.7 26.8l18.3 56.3c3.2 9.9 12.4 16.6 22.8 16.6h59.2c10.4 0 19.6-6.7 22.8-16.6l18.3-56.3c3.2-9.9-.3-20.7-8.7-26.8l-47.9-34.8z" />
                        </svg>
                        <p>Fantasy</p>
                    </summary>
                </details>
                <details>
                    <summary>
                        <?xml version="1.0" encoding="UTF-8" standalone="no"?>
                        <svg xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
                            xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg"
                            xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/"
                            xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" id="svg2"
                            sodipodi:docname="_svgclean2.svg" viewBox="0 0 218 122" version="1.1"
                            inkscape:version="0.48.3.1 r9886">
                            <sodipodi:namedview id="namedview8" bordercolor="#666666" inkscape:pageshadow="2"
                                guidetolerance="10" pagecolor="#ffffff" gridtolerance="10" inkscape:window-maximized="0"
                                inkscape:zoom="0.22425739" objecttolerance="10" borderopacity="1"
                                inkscape:current-layer="svg2" inkscape:cx="372.04724" inkscape:cy="-404.18109"
                                inkscape:window-y="0" inkscape:window-x="0" inkscape:window-width="640" showgrid="false"
                                inkscape:pageopacity="0" inkscape:window-height="480" />
                            <path id="path4" inkscape:connector-curvature="0"
                                d="m0 50 4-36 35-3 3-11c71 0 123.4 4.2 170.8 21.8l-2 8 7.2 1.2-2 18-10.2 0.8-1.8 7.2h-39l-13 12h-32.4l-35.6 53h-70.6l-5.6-9.4c8.4-13.4 25.2-40.2 25.2-46.2 0-9.8-5.2-11-33-16.4zm54.2 56.4 3.4 5.6h21.4l29-45c-2-10-14-10-30-10l5 24-19 3z" />
                        </svg>
                        <p>Sci-fi</p>
                    </summary>
                </details>
                <details>
                    <summary>
                        <?xml version="1.0" encoding="utf-8"?>
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1712.821 1686.121"
                            enable-background="new 0 0 1712.821 1686.121" xml:space="preserve">
                            <path d="M1048.256,633.499c212.849-356.854,285.555-335.845-191.845-590.438C384.889,283.217,484.493,353.496,664.566,633.499
              c-310.065-285.921-239.639-396.021-620.823,0c64.157,504.336,28.591,448.084,502.257,364.911
              c-416.078,181.718-421.368,113.233-191.845,590.438c503.843,103.322,428.181,97.12,502.257-364.911
              c69.825,407.236,10.978,486.041,502.257,364.911c233.666-457.592,211.268-427.46-191.845-590.438
              c452.881,101.063,461.097,199.985,502.257-364.911C1305.872,228.612,1381.606,318.787,1048.256,633.499z M856.411,1100.523
              c-114.579,0-207.463-92.884-207.463-207.463s92.884-207.463,207.463-207.463c114.578,0,207.463,92.884,207.463,207.463
              S970.989,1100.523,856.411,1100.523z" />
                        </svg>
                        <p>Romance</p>
                    </summary>
                </details>
                <details>
                    <summary>
                        <?xml version="1.0" encoding="UTF-8" standalone="no"?>
                        <svg xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
                            xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg"
                            xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/"
                            xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                            xmlns:svg="http://www.w3.org/2000/svg" xmlns:ns1="http://sozi.baierouge.fr"
                            xmlns:xlink="http://www.w3.org/1999/xlink" id="svg2986" sodipodi:docname="Taurus85.svg"
                            inkscape:export-filename="D:\Dateien\rollenspiel\Welcome to ZED\Items\Taurus85.png"
                            viewBox="0 0 431.81 290.32" inkscape:export-xdpi="300" version="1.1"
                            inkscape:export-ydpi="300" inkscape:version="0.48.2 r9819">
                            <sodipodi:namedview id="base" fit-margin-left="0" inkscape:zoom="1.4" borderopacity="1.0"
                                inkscape:current-layer="layer1" inkscape:cx="112.91428" inkscape:cy="109.71164"
                                inkscape:window-maximized="1" showgrid="false" fit-margin-right="0" units="mm"
                                inkscape:document-units="mm" bordercolor="#666666" inkscape:window-x="-8"
                                inkscape:window-y="-8" fit-margin-bottom="0" inkscape:window-width="1366"
                                inkscape:pageopacity="0.0" inkscape:pageshadow="2" pagecolor="#ffffff"
                                inkscape:window-height="706" fit-margin-top="0" />
                            <g id="layer1" inkscape:label="Layer 1" inkscape:groupmode="layer"
                                transform="translate(-126.29 -141.21)">
                                <path id="path3027" style="fill:#000000" inkscape:connector-curvature="0"
                                    d="m496.24 431.17c-28.264-0.59012-31.429-1.0232-36.868-5.0448-3.9076-2.889-5.1287-6.5306-5.1434-15.338-0.0205-12.279-2.5004-18.993-10.887-29.478l-5.1011-6.3775v-9.335c0-10.527-1.9694-17.307-7.0736-24.353-8.8995-12.285-25.369-14.375-39.165-4.9696-6.4443 4.3935-6.9945 4.5413-8.8016 2.364-1.1291-1.3605-1.7814-1.0632-5.3724 2.4492-10.813 10.577-29.218 13.407-56.033 8.6184-17.755-3.1708-39.107-12.214-47.603-20.162-6.9586-6.5089-9.8298-12.502-11.024-23.008-1.5705-13.822-4.992-19.505-14.427-23.966-4.1875-1.9796-6.5884-2.3653-14.775-2.3735-9.5686-0.01-9.7953-0.0639-10.75-2.5749-0.53639-1.4108-0.98625-9.6233-0.9997-18.25-0.0278-17.832-0.73699-21.996-4.9677-29.172-1.6543-2.8057-3.0078-6.2013-3.0078-7.5458v-2.4445l-39.632-0.26148-39.632-0.26147-4.3119-15c-4.2426-14.759-4.3128-15.253-4.3675-30.719-0.0502-14.189 0.19018-16.472 2.4702-23.457 1.3892-4.2558 3.0768-8.0879 3.75-8.5156 3.2566-2.069 14.912 0.16633 21.989 4.2168 2.6717 1.5293 60.735 2.6145 60.735 1.1351 0-0.7663 2.3028-1.1603 6.7821-1.1603 3.7301 0 9.2426-0.66053 12.25-1.4678 4.7321-1.2703 14.013-1.3283 68.968-0.43078 34.925 0.57039 69.8 1.3434 77.5 1.7178l14 0.68078 3.6809 7c2.0245 3.85 4.4995 8.5643 5.5 10.476 3.1167 5.9562 8.7861 5.8298 14.637-0.32618 5.4104-5.6922 19.646-9.7913 21.075-6.0683 1.047 2.7285 0.68371 4.6616-0.77115 4.1033-0.75798-0.29086-1.7705-0.16837-2.25 0.27221-0.47953 0.44058-2.5973 1.3528-4.7062 2.0272-4.0727 1.3024-15.558 12.188-18.293 17.337-1.6793 3.1621-1.5631 3.4169 4.526 9.9282 1.9288 2.0625 4.1055 3.75 4.8372 3.75 2.3071 0 11.184 4.9356 15.05 8.3676 4.1932 3.7228 11.781 6.1006 22.714 7.1183 12.92 1.2026 22.13 4.4103 23.575 8.2109 0.76679 2.0168 1.5558 2.3032 6.3447 2.3032 8.2402 0 9.9775 1.9911 13.524 15.5 5.8254 22.19 11.076 33.579 27.017 58.602 18.011 28.272 25.706 51.864 26.712 81.898 0.43459 12.973 0.17009 17.518-1.6225 27.88-2.34 13.526-4.3446 18.507-9.0357 22.455-4.8248 4.0598-10.821 4.4888-51.014 3.6496zm-132.95-89.62c10.081-4.598 16.459-13.384 17.594-24.237 0.81487-7.7963-0.90345-14.501-5.8543-22.842-5.4752-9.2248-6.1634-9.6735-9.7287-6.343-1.7592 1.6433-5.8827 3.5688-10.542 4.9226l-7.6524 2.2235 0.67368 5.392c0.52239 4.181 0.18361 6.909-1.5084 12.146-3.5633 11.03-9.5383 17.787-19.327 21.859-4.2451 1.7657-14.813 1.7044-15.408-0.0894-0.20133-0.60689 2.4468-2.129 5.8847-3.3826 8.5442-3.1154 12.018-5.5894 15.958-11.366 3.2329-4.7395 3.3567-5.2715 3.2668-14.037-0.0778-7.5856-0.66372-10.785-3.5-19.111l-3.4066-10-12.5 0.26185c-23.441 0.49104-33.518 3.3521-40.489 11.496-8.4816 9.9089-7.7733 26.219 1.5442 35.556 4.4307 4.44 10.101 7.653 19.671 11.145 17.895 6.531 31.615 9.0052 48.273 8.7053 10.196-0.18353 13.339-0.60762 17.051-2.3006zm-2.0508-109.69c0-7.7064-0.24244-13.769-0.53876-13.473-0.29632 0.29631-0.94251 6.5594-1.436 13.918-0.49348 7.3586-1.2273 14.279-1.6308 15.378-0.72354 1.9713-0.7039 1.9725 1.436 0.0936 2.0322-1.7844 2.1696-2.792 2.1696-15.917zm-103.8 0.57165-0.30011-15.25h-2.4499c-2.4131 0-2.4531 0.14271-2.6614 9.5-0.47361 21.27-0.65288 19.911 2.7115 20.553 1.65 0.31512 3 0.54454 3 0.50982 0-0.0347-0.13505-6.9256-0.30011-15.313zm104.71-58.5c0.18262-12.249 0.0231-13.75-1.4618-13.75-1.1091 0-1.4637 0.52929-1.0598 1.5818 0.33385 0.86998 0.63862 7.9575 0.67728 15.75 0.0886 17.862 1.5675 14.99 1.8443-3.5818z" />
                            </g>
                        </svg>
                        <p>Crime</p>
                    </summary>
                </details>
                <details>
                    <summary>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path
                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                        </svg>
                        <p>Non-fiction</p>
                    </summary>
                </details>
            </div>
            <div class="sidebar-left_about">
                <small>
                    Copyright @StoryConnect inc.
                </small>
            </div>
        </nav>
        <main>
            <header class="posts-header">
                <button class="create-post">
                    <div class="avatar">
                        <?xml version="1.0" encoding="UTF-8"?>
                        <svg width="115px" height="40px" viewBox="-31.5 0 319 319" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            preserveAspectRatio="xMidYMid">
                            <defs>
                                <path
                                    d="M9.87245893,293.324145 L0.0114611411,30.5732167 C-0.314208957,21.8955842 6.33948896,14.5413918 15.0063196,13.9997149 L238.494389,0.0317105427 C247.316188,-0.519651867 254.914637,6.18486163 255.466,15.0066607 C255.486773,15.339032 255.497167,15.6719708 255.497167,16.0049907 L255.497167,302.318596 C255.497167,311.157608 248.331732,318.323043 239.492719,318.323043 C239.253266,318.323043 239.013844,318.317669 238.774632,318.306926 L25.1475605,308.712253 C16.8276309,308.338578 10.1847994,301.646603 9.87245893,293.324145 L9.87245893,293.324145 Z"
                                    id="path-1">
                                </path>
                            </defs>
                            <g>
                                <mask id="mask-2" fill="white">
                                    <use xlink:href="#path-1">

                                    </use>
                                </mask>
                                <use fill="#0b1416" fill-rule="nonzero" xlink:href="#path-1">
                                </use>
                                <path
                                    d="M188.665358,39.126973 L190.191903,2.41148534 L220.883535,0 L222.205755,37.8634126 C222.251771,39.1811466 221.22084,40.2866846 219.903106,40.3327009 C219.338869,40.3524045 218.785907,40.1715096 218.342409,39.8221376 L206.506729,30.4984116 L192.493574,41.1282444 C191.443077,41.9251106 189.945493,41.7195021 189.148627,40.6690048 C188.813185,40.2267976 188.6423,39.6815326 188.665358,39.126973 Z M149.413703,119.980309 C149.413703,126.206975 191.355678,123.222696 196.986019,118.848893 C196.986019,76.4467826 174.234041,54.1651411 132.57133,54.1651411 C90.9086182,54.1651411 67.5656805,76.7934542 67.5656805,110.735941 C67.5656805,169.85244 147.345341,170.983856 147.345341,203.229219 C147.345341,212.280549 142.913138,217.654777 133.162291,217.654777 C120.456641,217.654777 115.433477,211.165914 116.024438,189.103298 C116.024438,184.317101 67.5656805,182.824962 66.0882793,189.103298 C62.3262146,242.56887 95.6363019,257.990394 133.753251,257.990394 C170.688279,257.990394 199.645341,238.303123 199.645341,202.663511 C199.645341,139.304202 118.683759,141.001326 118.683759,109.604526 C118.683759,96.8760922 128.139127,95.178968 133.753251,95.178968 C139.662855,95.178968 150.300143,96.2205679 149.413703,119.980309 Z"
                                    fill="#FF4785" fill-rule="nonzero" mask="url(#mask-2)">
                                </path>
                            </g>
                        </svg>
                        <i class="status-icon online"></i>
                    </div>
                    <p><b>Create a post</b></p>
                </button>
                <div class="post-header_sort">
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path
                                d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                        </svg>
                    </button>
                </div>
            </header>
            <!-- Horror -->
            <div class="post no-hover">
                <header>
                    <img src="./img/islabre-pfp.jpg" alt="" />
                    <span>
                        <b>SilverFalcon</b>
                        <hr>
                        <i>Non-Fiction</i>
                        <hr>
                        <i>4 days ago</i>
                    </span>
                </header>
                <div class="post-content">
                    <div class="post-content2">
                    <h3>A Serendipitous Encounter</h3>
                    <p>It was a crisp autumn afternoon when I decided to take a leisurely walk through the bustling streets of my city. The vibrant colors of fall painted the trees in shades of gold and crimson. I had no particular destination in mind, just a desire to embrace the beauty of the season.</p>
<p>As I meandered along, my path led me to a small, charming cafe nestled on a quiet corner. The aroma of freshly brewed coffee wafted through the air, and I couldn't resist the temptation. I decided to step inside for a warm cup of cappuccino.</p>
<p>As I settled into a cozy corner with my coffee and a good book, I noticed a stranger sitting at the adjacent table. He was engrossed in his laptop, occasionally scribbling in a notebook. What caught my attention was the air of deep concentration that surrounded him, as if he were on the brink of a breakthrough.</p>
<p>I couldn't help but steal a few glances at his screen, which displayed intricate lines of code. My curiosity got the better of me, and I struck up a conversation. "Excuse me," I began, "are you a programmer?"</p>
<p>The man looked up, a smile playing on his lips. "Yes, I am. I'm working on a personal project." We began discussing the intricacies of software development, a world I knew little about. He patiently explained the nuances, his passion shining through with each word.</p>
<p>Our conversation soon drifted from coding to broader topics. We talked about our dreams, our favorite books, and our love for travel. It was as if the universe had conspired to bring two strangers together, bonding over shared interests and experiences.</p>
<p>Hours passed like minutes, and the cafe's cozy ambiance enveloped us in a bubble of serendipity. We shared stories of our lives, our past, and our aspirations. It felt as though I had known this person for years, not just a few hours.</p>
<p>As the day turned into evening, we exchanged contact information with promises to meet again. The chance encounter had transformed into the beginning of a meaningful friendship. It was a reminder that life often unfolds in unexpected ways, introducing us to people who leave an indelible mark on our hearts.</p>
<p>That day, I left the cafe with a heart warmed not only by the cappuccino but also by the delightful encounter with a stranger turned friend. It was a testament to the beauty of spontaneity and the incredible stories that unfold when we take the time to connect with those we meet along the way.</p>
                    </div>
                </div>
                <div class="comments-separator">
                    <hr>
                </div>
                <div class="comments-section">
                    <div class="Comments-SVG">
                        <a href="">
                            <?xml version="1.0" encoding="UTF-8"?>
                            <svg width="22.4px" height="22.4px" viewBox="0 0 24 24" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                <title>ic_fluent_comment_24_regular</title>
                                <desc>Created with Sketch.</desc>
                                <g id="🔍-Product-Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="ic_fluent_comment_24_regular" fill="#FFFFFF" fill-rule="nonzero">
                                        <path
                                            d="M5.25,18 C3.45507456,18 2,16.5449254 2,14.75 L2,6.25 C2,4.45507456 3.45507456,3 5.25,3 L18.75,3 C20.5449254,3 22,4.45507456 22,6.25 L22,14.75 C22,16.5449254 20.5449254,18 18.75,18 L13.0124851,18 L7.99868152,21.7506795 C7.44585139,22.1641649 6.66249789,22.0512036 6.2490125,21.4983735 C6.08735764,21.2822409 6,21.0195912 6,20.7499063 L5.99921427,18 L5.25,18 Z M12.5135149,16.5 L18.75,16.5 C19.7164983,16.5 20.5,15.7164983 20.5,14.75 L20.5,6.25 C20.5,5.28350169 19.7164983,4.5 18.75,4.5 L5.25,4.5 C4.28350169,4.5 3.5,5.28350169 3.5,6.25 L3.5,14.75 C3.5,15.7164983 4.28350169,16.5 5.25,16.5 L7.49878573,16.5 L7.49899997,17.2497857 L7.49985739,20.2505702 L12.5135149,16.5 Z"
                                            id="🎨-Color">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="comments-sectionactual" style="margin-top: 24px;">
                        <div class="comment1">
                            <h5>JuliaRose</h5>
                            <p>Loved the pacing ! Insane narration !!!!</p>
                        </div>
                        <div class="comment1">
                            <h5>AeroAstro</h5>
                            <p>I'm in awe of your storytelling talent</p>
                        </div>
                        <div class="comment1">
                            <h5>GamerProX</h5>
                            <p>What a fantastic adventure you've woven.</p>
                        </div>
                        <div class="comment1">
                            <h5>CoffeeBreaks</h5>
                            <p>You have a way with words. Bravo! </p>
                        </div>
                        <div class="comment1">
                            <h5>CosmicVoyager</h5>
                            <p>I'm so glad I stumbled upon your story.</p>
                        </div>
                        <div class="comment1">
                            <h5>RacingChampion</h5>
                            <p>I'm inspired by your words.</p>
                        </div>
                    </div>
                </div>
                </a>
            </div>
        </main>
        <aside class="popular-community">
            <h4>Your Profile</h4>
            <button>
                <img src="./img/islabre-pfp.jpg" alt="">
                <span>
                    <b><?php echo $_SESSION['username'];?></b>
                </span>
            </button>
        </aside>
    </div>
</body>

</html>