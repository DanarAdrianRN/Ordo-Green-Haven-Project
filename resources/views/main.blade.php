<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Green-Haven-Project</title>
        <link rel="icon" href="https://s3-alpha-sig.figma.com/img/3bba/48ec/53328765b788317fda180a14e4e969bb?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=gzP9~f2YbHrzuTDKagFg6a1BmpISza70pE-5XsUCQzrFDfudHca~BLtwqrGQyPiN1JM8nQGGSWxn9hzS8czSFzfah4f36cflo~-KVUaqes5I1c9VRUiiRKt-Le3na9ZHGkW-sArr2PEK4tzQT6EQt6~Xv4MDVGa861~KILeQFeh9ZtImRwLYFDBTHgiAJqh197v82vHQfusQTu6ChJ1J9m~sIPcovOmIn2dCutNQ~EcK0--1vjHLzta2O7o9kFTf4AOiJGyOFtrdSVwFOcT-Rvhhh19Uxcm5VPdzIliPBqatCcqRItJcjXQYEmM38i7Kxvy9MYOqNqH10vMBT8sjxQ__" type="logo-greenhaven.png">
        @vite(['resources/scss/main.scss', 'resources/js/app.js'])
    </head>
    <body>
        <nav>
            <div class="logo">
                <img src="https://s3-alpha-sig.figma.com/img/3bba/48ec/53328765b788317fda180a14e4e969bb?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=gzP9~f2YbHrzuTDKagFg6a1BmpISza70pE-5XsUCQzrFDfudHca~BLtwqrGQyPiN1JM8nQGGSWxn9hzS8czSFzfah4f36cflo~-KVUaqes5I1c9VRUiiRKt-Le3na9ZHGkW-sArr2PEK4tzQT6EQt6~Xv4MDVGa861~KILeQFeh9ZtImRwLYFDBTHgiAJqh197v82vHQfusQTu6ChJ1J9m~sIPcovOmIn2dCutNQ~EcK0--1vjHLzta2O7o9kFTf4AOiJGyOFtrdSVwFOcT-Rvhhh19Uxcm5VPdzIliPBqatCcqRItJcjXQYEmM38i7Kxvy9MYOqNqH10vMBT8sjxQ__" alt="logo">
            </div>
            <ul>
                <li><a href="#about">About Green Heaven</a></li>
                <li><a href="#event">Event Details</a></li>
                <li><a href="#sponsors">Our Sponsors</a></li>
                <li><a href="#leaderboard">Leaderboard</a></li>
            </ul>
            <div class="btn-plant">
                <button>Plant a Mangrove</button>
            </div>
        </nav>

        <div class="container-fluid">

            <section class="leaderboard" id="leaderboard">
                <div class="leaderboard-top">
                    <div class="leaderboard-content1">
                        <div class="hero-text">
                            <div class="GH-project">
                                <button>Green Heaven Project - Mangrove</button>
                                <h1>Green Horizons Await, Join Us in
                                    Planting 10,000 Mangroves!</h1>
                            </div>
                            <div class="support-mission">
                                <div class="content-support">
                                    <div class="total-support">
                                        <img src="https://s3-alpha-sig.figma.com/img/4837/02aa/b2d87e226edbf8d436c2d055af11d8ad?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=rdjj8uf10Eqs0vtfNcJ5bURRzmTor2BUT9-q4~H3PAhgSyr4NGrWoVbJetqu2k7Td7dhh4FCEma~OntrkKGaM3~Ki1aoiy804ZUMym11EIoPZgoRD9DW0NAgoYZLrbveGSx1jLPGA-doflJeib-sH-dSdfp~CfhiS-hk~52HZMFfe8Gyy9oPrKWitWMUp4FAH9gNMqiVhyOHK2w0UN~axb5ax4xjnpauoAbDhbtUVhOHQvsJ1P9jSa4-0rOlFeuzMPGCCVWP2fTwfgbkAIrRFD1bhprGJLfC4QjocZp~4nzah~TR9z6z0bTApBYV-Ph8Mdcus2DiXWb5ulvoGE4vVA__" alter"mangrove">
                                        <h1>5,690<span>/10,000 Pohon</span></h1>
                                    </div>
                                    <button>Support Our Misson ></button>
                                </div>
                                <div class="cart-support">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="image">
                            <img src="https://s3-alpha-sig.figma.com/img/9b6f/1ff8/3057087f61c3ff572442869843ae61c9?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=iHiO4X8W5qHfbeX7X5KgmfmpVjc3UB9m9TW4CQbs40lhbBc-g3tdzV4D3TDAbodzFT8I9rHvUk306WJl9TN9K2-ixYANWe4ilN2LZHkDcF0L1BPPHYl1UFF1ZTfxKUdVwSzdA7~XAsF1HUS8E~CXfhxwqsG~OvHFD65Qwffoi~fE-nwfWP3bRGhIYeIEQ3n9xrl9aJFlrBE~Ofix5zueNiDDCM2ZozpcAtdhP~kimB7AdI5JbTTFJAOzVOlS0ZYtQEiRFFbENclC4WiIhqavcRNGZ47OmYYdXIdHajxUbYWKOvVapSP5F0Yoq238zUOTdzqNvLM~PeDboCm4LqIFzw__" alt="#">
                            <img src="https://s3-alpha-sig.figma.com/img/9f6d/701e/c3e6a7548949676765877f67195b20cc?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=Nhclox9GGB810hIB2jT88WS1lHwREkRFksxHmLpv7itQuY2sDsqRNPB47mOHheXCnmVOkH9pAAK4dQSvsEKHUrtUALGIFjnDkEC6EQ6Sc1t858LwPiLd885B00Mal5sGEOMYvPwGc1HEYUmeizvYWhjpJbnj52kb0ka30pP9KHAeMvnEhj3I5qmaQk1A4~gcsznPxF~-xFDP4JCaVR77UUR~X9BaGomw~kPUSj~RBmOQx0OL-Oxy1T-DmLIdbeuO-1sggesdn869QiFikFPhg8~TOSeLJDOeuMrA8tWfrlpsxVuVF92T0HYdxlsbJvrNBIoosFvTTs7OzV6za0Fsqw__" alt="#">
                        </div>
                    </div>
                    <div class="leaderboard-content2">
                        <div class="judul">
                            <h1>Leaderboard</h1>
                            <div class="btn-most">
                                <button class="btn-active">Most Donation</button>
                                <button>Most Recent</button>
                            </div>
                        </div>
                        <div class="list-donasi">
                            <ul>
                                <li>
                                    <div class="list">
                                        <span class="rank">01</span> 
                                        <img src="https://s3-alpha-sig.figma.com/img/f633/1045/5ff5048d7f61386b9f6dc6727b3b6257?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=PIBCVpjP-YpZ0aAgTV3rQYB43uXWZ1GjHynLd1DN01BT4Hko6M-RCJG-iaR2zWyXh~-jwTtGfQscwu9xdDyT74qSV-wd-560pxoPq8gDGjn13QJfd8k32WPfbQE1azbBZBbd-pRGKaLJ6eRD2wCnYAjU3SbtQlZQJEAcMH1rnXn1xueBI8Tg-YKfKxJNJGZTDkCt8r5pPDScE1rX947zTrG3a04dLIPHRWbGy0-53nJYkFljzfg0sET7M8k5qQBlUrOutwiTyIRE9PQmGsyb2iYcF9fLOeA1GRyxHexvQnSc2RexBOO~j2qWUsrUFxHTpnm-lHJU6ytHRXMeFhonTQ__" alter="mangrove maven">
                                        <span class="name">
                                            <p>Mangrove Maven</p>
                                            <h1>Budi Hartanto</h1>
                                        </span>
                                    </div>
                                    <span class="donation">
                                        <img src="https://s3-alpha-sig.figma.com/img/4837/02aa/b2d87e226edbf8d436c2d055af11d8ad?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=rdjj8uf10Eqs0vtfNcJ5bURRzmTor2BUT9-q4~H3PAhgSyr4NGrWoVbJetqu2k7Td7dhh4FCEma~OntrkKGaM3~Ki1aoiy804ZUMym11EIoPZgoRD9DW0NAgoYZLrbveGSx1jLPGA-doflJeib-sH-dSdfp~CfhiS-hk~52HZMFfe8Gyy9oPrKWitWMUp4FAH9gNMqiVhyOHK2w0UN~axb5ax4xjnpauoAbDhbtUVhOHQvsJ1P9jSa4-0rOlFeuzMPGCCVWP2fTwfgbkAIrRFD1bhprGJLfC4QjocZp~4nzah~TR9z6z0bTApBYV-Ph8Mdcus2DiXWb5ulvoGE4vVA__" alter"mangrove">
                                        <h1>350 </h1>
                                        <p>Pohon</p>
                                    </span>
                                </li>
                                <li>
                                    <div class="list">
                                        <span class="rank">02</span> 
                                        <img src="https://s3-alpha-sig.figma.com/img/f633/1045/5ff5048d7f61386b9f6dc6727b3b6257?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=PIBCVpjP-YpZ0aAgTV3rQYB43uXWZ1GjHynLd1DN01BT4Hko6M-RCJG-iaR2zWyXh~-jwTtGfQscwu9xdDyT74qSV-wd-560pxoPq8gDGjn13QJfd8k32WPfbQE1azbBZBbd-pRGKaLJ6eRD2wCnYAjU3SbtQlZQJEAcMH1rnXn1xueBI8Tg-YKfKxJNJGZTDkCt8r5pPDScE1rX947zTrG3a04dLIPHRWbGy0-53nJYkFljzfg0sET7M8k5qQBlUrOutwiTyIRE9PQmGsyb2iYcF9fLOeA1GRyxHexvQnSc2RexBOO~j2qWUsrUFxHTpnm-lHJU6ytHRXMeFhonTQ__" alter="mangrove maven">
                                        <span class="name">
                                            <p>Mangrove Maven</p>
                                            <h1>Dewi Sartika</h1>
                                        </span>
                                    </div> 
                                    <span class="donation">
                                        <img src="https://s3-alpha-sig.figma.com/img/4837/02aa/b2d87e226edbf8d436c2d055af11d8ad?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=rdjj8uf10Eqs0vtfNcJ5bURRzmTor2BUT9-q4~H3PAhgSyr4NGrWoVbJetqu2k7Td7dhh4FCEma~OntrkKGaM3~Ki1aoiy804ZUMym11EIoPZgoRD9DW0NAgoYZLrbveGSx1jLPGA-doflJeib-sH-dSdfp~CfhiS-hk~52HZMFfe8Gyy9oPrKWitWMUp4FAH9gNMqiVhyOHK2w0UN~axb5ax4xjnpauoAbDhbtUVhOHQvsJ1P9jSa4-0rOlFeuzMPGCCVWP2fTwfgbkAIrRFD1bhprGJLfC4QjocZp~4nzah~TR9z6z0bTApBYV-Ph8Mdcus2DiXWb5ulvoGE4vVA__" alter"mangrove">
                                        <h1>330 </h1>
                                        <p>Pohon</p>
                                    </span></li>
                                <li>
                                    <div class="list">
                                        <span class="rank">03</span> 
                                        <img src="https://s3-alpha-sig.figma.com/img/f633/1045/5ff5048d7f61386b9f6dc6727b3b6257?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=PIBCVpjP-YpZ0aAgTV3rQYB43uXWZ1GjHynLd1DN01BT4Hko6M-RCJG-iaR2zWyXh~-jwTtGfQscwu9xdDyT74qSV-wd-560pxoPq8gDGjn13QJfd8k32WPfbQE1azbBZBbd-pRGKaLJ6eRD2wCnYAjU3SbtQlZQJEAcMH1rnXn1xueBI8Tg-YKfKxJNJGZTDkCt8r5pPDScE1rX947zTrG3a04dLIPHRWbGy0-53nJYkFljzfg0sET7M8k5qQBlUrOutwiTyIRE9PQmGsyb2iYcF9fLOeA1GRyxHexvQnSc2RexBOO~j2qWUsrUFxHTpnm-lHJU6ytHRXMeFhonTQ__" alter="mangrove maven">
                                        <span class="name">
                                            <p>Mangrove Maven</p>
                                            <h1>Eko Wahyudi</h1>
                                        </span>
                                    </div> 
                                    <span class="donation">
                                        <img src="https://s3-alpha-sig.figma.com/img/4837/02aa/b2d87e226edbf8d436c2d055af11d8ad?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=rdjj8uf10Eqs0vtfNcJ5bURRzmTor2BUT9-q4~H3PAhgSyr4NGrWoVbJetqu2k7Td7dhh4FCEma~OntrkKGaM3~Ki1aoiy804ZUMym11EIoPZgoRD9DW0NAgoYZLrbveGSx1jLPGA-doflJeib-sH-dSdfp~CfhiS-hk~52HZMFfe8Gyy9oPrKWitWMUp4FAH9gNMqiVhyOHK2w0UN~axb5ax4xjnpauoAbDhbtUVhOHQvsJ1P9jSa4-0rOlFeuzMPGCCVWP2fTwfgbkAIrRFD1bhprGJLfC4QjocZp~4nzah~TR9z6z0bTApBYV-Ph8Mdcus2DiXWb5ulvoGE4vVA__" alter="mangrove">
                                        <h1>200 </h1>
                                        <p>Pohon</p>
                                    </span>
                                </li>
                                <li>
                                    <div class="list">
                                        <span class="rank">04</span> 
                                        <img src="https://s3-alpha-sig.figma.com/img/c5d3/176f/ef393a73454cabec1ba57834c3aab772?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=rIHysFiXYCnktB0DE-6HI8hv55euFvE~-qhdJP8nt5q7e4J4kkYIiT0OwAMubgyTX8bUceEsYHDz~YGEJW7FllCR7PVYjupmiNtxrp0l2DmXtIpzlvF2VhHYGjT1cj2xlqBBNV-2jQTnW-1JMEmwhqrExfGe3ZnPcen2kP4EQh-rRguKpGv5IiN~ETPWuvuhuYOU8bEXe6swNCI83wBKbO-NYPeNRn6aGCmlkiQ~nc3ry35Lz9WKR03sGDCCpMCe9pQ9QqAhQWf6V2a-ryflAc8LfQiO3AL1KaPq30SGdxowl~Q6eYw6tfGYZXft-jGUHjYzA26ybpday9ZNU1kxfQ__" alter="mangrove maven">
                                        <span class="name">
                                            <p>Mangrove Maven</p>
                                            <h1>Rina Kartika</h1>
                                        </span>
                                    </div> 
                                    <span class="donation">
                                        <img src="https://s3-alpha-sig.figma.com/img/4837/02aa/b2d87e226edbf8d436c2d055af11d8ad?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=rdjj8uf10Eqs0vtfNcJ5bURRzmTor2BUT9-q4~H3PAhgSyr4NGrWoVbJetqu2k7Td7dhh4FCEma~OntrkKGaM3~Ki1aoiy804ZUMym11EIoPZgoRD9DW0NAgoYZLrbveGSx1jLPGA-doflJeib-sH-dSdfp~CfhiS-hk~52HZMFfe8Gyy9oPrKWitWMUp4FAH9gNMqiVhyOHK2w0UN~axb5ax4xjnpauoAbDhbtUVhOHQvsJ1P9jSa4-0rOlFeuzMPGCCVWP2fTwfgbkAIrRFD1bhprGJLfC4QjocZp~4nzah~TR9z6z0bTApBYV-Ph8Mdcus2DiXWb5ulvoGE4vVA__" alter="mangrove">
                                        <h1>190</h1>
                                        <p>Pohon</p>
                                    </span>
                                </li>
                                <li>
                                    <div class="list">
                                        <span class="rank">05</span> 
                                        <img src="https://s3-alpha-sig.figma.com/img/c5d3/176f/ef393a73454cabec1ba57834c3aab772?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=rIHysFiXYCnktB0DE-6HI8hv55euFvE~-qhdJP8nt5q7e4J4kkYIiT0OwAMubgyTX8bUceEsYHDz~YGEJW7FllCR7PVYjupmiNtxrp0l2DmXtIpzlvF2VhHYGjT1cj2xlqBBNV-2jQTnW-1JMEmwhqrExfGe3ZnPcen2kP4EQh-rRguKpGv5IiN~ETPWuvuhuYOU8bEXe6swNCI83wBKbO-NYPeNRn6aGCmlkiQ~nc3ry35Lz9WKR03sGDCCpMCe9pQ9QqAhQWf6V2a-ryflAc8LfQiO3AL1KaPq30SGdxowl~Q6eYw6tfGYZXft-jGUHjYzA26ybpday9ZNU1kxfQ__" alter="mangrove maven">
                                        <span class="name">
                                            <p>Mangrove Maven</p>
                                            <h1>Agus Prasetyo</h1>
                                        </span>
                                    </div> 
                                    <span class="donation">
                                        <img src="https://s3-alpha-sig.figma.com/img/4837/02aa/b2d87e226edbf8d436c2d055af11d8ad?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=rdjj8uf10Eqs0vtfNcJ5bURRzmTor2BUT9-q4~H3PAhgSyr4NGrWoVbJetqu2k7Td7dhh4FCEma~OntrkKGaM3~Ki1aoiy804ZUMym11EIoPZgoRD9DW0NAgoYZLrbveGSx1jLPGA-doflJeib-sH-dSdfp~CfhiS-hk~52HZMFfe8Gyy9oPrKWitWMUp4FAH9gNMqiVhyOHK2w0UN~axb5ax4xjnpauoAbDhbtUVhOHQvsJ1P9jSa4-0rOlFeuzMPGCCVWP2fTwfgbkAIrRFD1bhprGJLfC4QjocZp~4nzah~TR9z6z0bTApBYV-Ph8Mdcus2DiXWb5ulvoGE4vVA__" alter="mangrove">
                                        <h1>140</h1>
                                        <p>Pohon</p>
                                    </span>
                                </li>
                                <li>
                                    <div class="list">
                                        <span class="rank">06</span> 
                                        <img src="https://s3-alpha-sig.figma.com/img/231b/0526/85e11e8c42888b8441d272e0b1cc14d6?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=sjlc~omPMBHkoQcT5mrDGg1NXPlTJJJqzuTq1lyjzAh-XzkUF1e4~m5Go6w6qENaen04saMqZlxNWrotSBiQ2uogqGIUKfCl-r7p9IzZVvIuf5kpNrkeq3HBMsU7mJs34JPryEAt5WAN~VkIg7JnKhH92f5sGc7No1CS0~SLzpQ0weCcv1zBlQhyAlHgtbdlaD3sNMGjrdEhnN12WvacrOVIIFtXT1d1afBJWWcySaNqckxAP~4DrGrtT-jIKRuXthao3s3uUa0PHbfdPFTVoZBwGydVNiwz0Qu5M0vFRxSe59gQ8p9aLRY0P1IUVGOzD2zI1jQyPttVmJpel1F4Tg__" alter="mangrove maven">
                                        <span class="name">
                                            <p>Mangrove Maven</p>
                                            <h1>Irfan Setiawan</h1>
                                        </span>
                                    </div> 
                                    <span class="donation">
                                        <img src="https://s3-alpha-sig.figma.com/img/4837/02aa/b2d87e226edbf8d436c2d055af11d8ad?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=rdjj8uf10Eqs0vtfNcJ5bURRzmTor2BUT9-q4~H3PAhgSyr4NGrWoVbJetqu2k7Td7dhh4FCEma~OntrkKGaM3~Ki1aoiy804ZUMym11EIoPZgoRD9DW0NAgoYZLrbveGSx1jLPGA-doflJeib-sH-dSdfp~CfhiS-hk~52HZMFfe8Gyy9oPrKWitWMUp4FAH9gNMqiVhyOHK2w0UN~axb5ax4xjnpauoAbDhbtUVhOHQvsJ1P9jSa4-0rOlFeuzMPGCCVWP2fTwfgbkAIrRFD1bhprGJLfC4QjocZp~4nzah~TR9z6z0bTApBYV-Ph8Mdcus2DiXWb5ulvoGE4vVA__" alter="mangrove">
                                        <h1>80</h1>
                                        <p>Pohon</p>                             
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="leaderboard-buttom">
                    <section class="support-by">
                        <img src="https://s3-alpha-sig.figma.com/img/21c8/0e09/1594aeae0eac25c81ea0e9f8b9e69506?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=CC3VewcfROaW3usf-eXxKwVIRH7smetjzjSw6woCvCQZRNIQLDrLGJauat3tiWd~zlUR5qOc0tX4~SEAY2nIM11JoFGVS6sogIe~-Lb~eXpMFv03SMk7CRF~BoXdZdyUjFQ~4FzwRFLoneT~5vDr1473vJq8gWbD~HlWP8KtfifG6FPX1gYt3dNzJ1v9bD2noq2yFrcLDdyEeonNIftkBjFT7eVP2qkagcqmeD8HIR6W0O7Ai1c-vbXEyiHRflWf2BgU2V3GCq65HLLqbktLrTxQ8tPNMK4yoymA9MuMAlnw51DkRcyimHYTQwr1NUPGyjT1MELDxi6B3t66Mn-HBQ__" alt="JALA">
                        <img src="https://s3-alpha-sig.figma.com/img/ef61/72a0/c7f7f01eb82485cba3a400bb411ecfb4?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=uUu1gG06bZauJHkRVW3Y0k~5z8JCPTsrElNJJF~-datoaf9qrrwepxNAwzjy8JXME9GtFjSBrbVngobjgEIm7gL1sZHkVeplQr6i0E7AkXWNfftkms4-yex43jD0qxJhl-Ti9r1j2OFLIYdjeRLgHJrv3lJV1WOAmHaYvcKJuhn5RKt8F8DC6WTGZFSW9GpeBiiFWOezjsFEv5qcqMQc6aj3XV0eoexzWOgrsPWNA0B2N69d0a4AJo9podwQ6nvKEk0XyGXq9je~ZNcR144G1vtMSp8PmC5STdGpmZg3GKh-XWa9wpZBjQmIbpipFq-JTJLmHgC~ZHIigwyhfNbBJg__" alt="eFishery">
                        <img src="https://s3-alpha-sig.figma.com/img/235c/c9c5/eda0417d20db0b229ece7e3c2ec3c0b8?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=iJ~4pGnZTzfR1jsoInWvZhsE8j-ZpIgh64wYRzO5Ag02-03~WykZyYiuJlf5fA~QWJ7HsJ6sXYWJruGUTD2DW8RaBSxUnYNWhWYHQsYkKhtpZ79~nsRpJDE~uRC0jLslgYG7O3edwiH1S66ap3Tq~iL90JR7r2iuL7do6~vQ3zhq0rzrglDG3E0QGJVeLSazjpmM0a5BWJ1rkq16dY4WXWn8uq0URtFjQcc7pTqexVpDhs0aMUDJ3PpFj~ANBhTu5qVv4EQrv-NhkVUV-Gw6xS6-NOsQ3nkqKBRZyfpZQ2YuBNCjWPg5DKaWFz1vRczbgQpXbFZPx9FfzHWRprWLPw__" alt="Azarine">
                        <img src="https://s3-alpha-sig.figma.com/img/fd47/3356/d30adda0786bc9d524bab73dae636df6?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=B2qKtEplHthLPc4ZtsHGhwLO5hOZzKwHKphq6hOT~9UD1yN9Is0hTJdYqp0aHYHACIW7a7EQ5lCWgMrrU4Y5h-1lqVRjJOc6D-88zyVsPMNb9u-TKsQiHfh63qY~pO0ImN-MgcioJil~97JPIMT~IXto95uEM8lXP86bc~gPoHQ~ev4DkSuFLWgInGf3xOVj~idlj7gMHre4aUKXn8vJQwaW-5muzVHFiRINnlzzFa7KxYjL90NcbBmmkoHx9Q2QB2dAEqk8HZD3zti6IdtPGOOLS7U53YpsKPvJjzisywrLAokhpuwBLaEw1rNCLWUHfpwja9R3ubgP03FWw1yg4g__" alt="Kompas">
                        <img src="https://s3-alpha-sig.figma.com/img/79b6/e49b/a3a4a10ff3473f60d86114130ca0494a?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=bRkqZI4bQ12vORu5jobEBSTBqDDGatUqh~4R9OYjSnV6SwcYXKA1D6N1c-sS5Kq6Fa4bOaDkrs96hDeOER-ZLOHaGLFn~8vDBsXnlMaGJNFyczN1QFjIfkr5s3gdUTdd0e7qBnF6EFSRUw1psmzzWl-4A4QVWswJHC60qnIhssge~9iJck12yOpzhsCX1q3D5eApBBtmiGLmP9UBMml5nZQ4H9IJeAbx34AXxq~SX9yxsVXYceboyc2Lh~UqmPrhAbZdf44zbIbjdFP749pXadj-qmU~fA-PB4yyiMDVIojZKaxAosG52aNLUSAIGG3j-UDciRI7VQ-t0kma5wTxyg__" alt="Tribun News">
                        <img src="https://s3-alpha-sig.figma.com/img/02c9/2f1c/109edb050cea07c3d2e774e7701506c7?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=mSNVVA5eNcVznwk5mRzFpdgGOIm1~bhJvbbbi7y6Crmdt2Y2brcgtytGx74i~A63xxlOEo62ZA-rhvC9ppa0WoDET2X3ocnc8RpoUNXHW8Op7ULSpplVBf0uMl1k4kRc-R9lrgUHvbbuMTjz5uCPYQ34PlOM7m6nEDFowd1YiSS45wkF8O4Pr83huGx5O4wuuhYpS4qNspukzNtzRDklgCDMWF43kV-o6Ll3GGG27NBNk3PMOaac0QMFdixzkg-FDr07VckLGTSafNgBs7mfkV~rG0765QyP3fEmBv~Q~Yi0q~8z63Ss82kCmza5VjLbkTgqjG5kr3QUhqJt0qYRwg__" alt="Jawa Pos">
                    </section>
                </div>
            </section>

            <section class="about" id="about">
                <div class="about-content">
                    <div class="about-header">
                        <div class="about-logo">
                            <div class="logo-border">
                                <img src="https://s3-alpha-sig.figma.com/img/d9e6/fd3f/3ae8350b79e9b7187ae1f299512a9a83?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=pSr-WKqUBwQoRzpM9lADPvI0StxtXSqCkIvODTB~4qT6vX747iZSkhncFEcrqUR3bRMur5gej-sIcwn3XZj7UGW7l6Pa8BhLUvhR9QTbbQM5A-W3GNRZN~PeMKRnCKBxFjyPPOovgPHZItRVmnHas2VsQeKXBTFF6ALB~k-WJpo13Dbis-ydy99FUUvkvgVUuayFWEmF0y1XgUUxsdVSFC4qzGR4vNtig4wwkOneQoonzJjndhANPIRBKR5URBerrOrQKWcBXZNWINJKGbfxr1-E9Wcw0nV0nicHwXRcqQDuHEVCNA2I5RtSCqTLwLDt3SKH1Vhfk3v0qaWCeqR~vw__" alt="JCI Logo">
                            </div>
                            <div class="logo-border">
                                <img src="https://s3-alpha-sig.figma.com/img/9942/fcc1/1cc3e4bb01b5a9ce83b5c04e3540ef5b?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=TdU5xcKa-C0zK3OGev8ovrGCk1hGYh3CXsdF1388gvO83Hu8bSX-wYJkyGoeFXhNLPtW0VFnn4UlDlOsTt28iHNaHFvOjfpycBtATCzZQda1SGt0B-0VFcLPWbh-eVZmZM9fr4HpCWLNLCc~UsEBsgTH0IyH2326Z9BAWE-31zvW-I71UYpyg116F3080butdZYyjKeX72axD8qp~986fxe1JiKdiM5L67V6pBOkhaf1d7VEMOyWqIPtFUb3ZKJWyql6qr1Q1JgsPfmzutlvl7oH7S5MWo6MyFuNGqhq-n-E6Wfg5VsbLh2Ido2amhCDY6C9Ce9KAgOar9HsnpzDSQ__" alt="Green Haven Logo">
                            </div>
                        </div>
                        <div class="about-title">
                            <h1>About Green Haven Project</h1>
                            <p>The Green Haven Project - Mangrove aims to restore coastal ecosystems and raise awareness by planting mangroves and educating participants about the importance of these areas. This six-hour event will involve JCI members, local farmers, and students, focusing on combating beach erosion and promoting ESG values.</p>
                        </div>
                    </div>
                    <div class="about-images">
                        <div class="image-box">
                            <img src="https://s3-alpha-sig.figma.com/img/4d55/a4a8/e53cb9e7e28285dfe3e5c4de1b554180?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=gaGGO-ydOCdiOA2S3j17~NCvwvxaRE43U0O0uOCttd3Y6I63nWEgf5HG7tyW0NK5JP5NEjV4uBXN60iTGNgMViyxYOy3672eX3XbJKeFGrk0k2zPPdI1Cz4xyIcTMKU57WxCPehAZ4~3Wi0pbcB98c5Wm3Ns0oJdx6IsKIRtTe8o5wuKSFv7HReY4Z1sXt8RnXFlYnO52k8BmT5pTX4SyNZJjx1sfeD-DTbbqxhM5H2vjaDjN4PI1woN9cjH2CNzet1B8mxM2o8lui0kuDNRmNvcXzz3Ga1VetOFsiWY7wOlCgxdou04fwfK4WGNZflt6jrNW0yiUakNf7lvfaynHQ__" alt="Before mangroves were planted">
                            <p>Before mangroves were planted</p>
                        </div>
                        <div class="transformation">
                            <img src="https://s3-alpha-sig.figma.com/img/c432/4fbf/d7772123000ed58bc682f4bbcc8b3434?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=bREhrcdCNoqg7QhKiPvXa38ag6TsI6wMUZKPKXYO4yfxqpWQM3nLIEuhyjcHsWSgPC52Z7pr1RMlpHBWT4ZU51bKV3vaivR0DOKvLPA8JnQuApNTfa5eoG66Xfnaew40CDDIqyz00-kAmeJPYxQ07carR~2lo7LMNejNZut8O5L743IgB1-AnJ-qEHFu9i33FERn39bw~-1QHpPblCND9iw01IT5fnyjTuzqRStYE4ENq0Xy2iJANfRrSsbfyPylpZqY-XaBEv3oSNXCHhBg9TJHGSiAYfH0Z67rJd9g-yWQNfZ38uuz6Z6iwWnO2GrBMXM8Ta0sktYC0Kv~4Duycw__" alt="Transformation">
                            <p>TRANSFORMATION</p>
                        </div>
                        <div class="image-box">
                            <img src="https://s3-alpha-sig.figma.com/img/c25a/f307/4e868568566ef17046052fff7426d4b4?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=kt6QlVkzVTO9mTqNLqamV-GQ5DrXfU0g-qoS--3NR5LipATHfYuQ63GyfZQIeyWmWKoY9dWFZYbdx5MIbrfg19LR3eRW5dnabb2r14tFXOHTFGRhWOdGQWR1m2wIbsZPD7URXP3f4lor6VONLqGPvBPXq45A8E5mvPuyiABbF9LZg1retmZ4V4jstCQb~aePP7B-s5~-nuJI3SbbQBZRGqurSU2HMIiBSy-Bfk26LtU3qfmBtxVOrccFfAncATUsAnfu0uIcxmT52rXZVuD1S3wGe9SOZfUrQNxn9Fnm1bu67iIm0rYszzG0YuXDuiYSp~wLenTAZuU-IaEkMZolDA__" alt="After mangroves were planted">
                            <p>After mangroves were planted</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="event" id="event">
                <div class="event-content">
                    <div class="event-header">
                        <h1>Event Summary</h1>
                        <p>We give you a brief overview of the event to give you a glimpse of what we're doing 
                            in the Green Haven Project, download the detailed PDF to see how you can get involved</p>
                    </div>
                    <div class="event-box">
                        <div class="event-info">
                            <h2>26/04/2024</h2>
                            <h3>08:00 - 11:00 WIB</h3>
                            <p>Join the impactful journey of planting mangroves, 
                                where you'll learn, collaborate with locals, earn recognition, 
                                and share your story through media coverage</p>
                                <hr>
                            <button>📄 View Event Details</button>
                        </div>
                        <div class="event-image">
                            <img src="https://s3-alpha-sig.figma.com/img/5110/3e05/f7f680881e067132ec2dbdf3055afacc?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=q~X5D222j8-8pFDZiJQiqNaJQBQJKQXr~SdJLTMFa6QruId2xdBkCbYWuEZwcRRua1Q-IhX7LVr1-gPR5AdPjY1qfdDmVKhnxlQcVDTN~m7QJNhwoRdAopGT-ApfKzRumyYfwLWbFeh45aiKEPWpe4jfDoFQ00HFOpPVx4LjwCPJeTQYsSRsDg24orbybJytnTKifhWDoCUBJwvGTpLlotrgp43s-yVoVSC5yN4jH-uLUq5qu7PUFPzs3ugqr1netGwdVlQ-gdqI7i3Z2cu~umZX82M~FVQ8KgqO3htXasm8EtDj7dH13wANVg54V1VZO2gunP1c0X7aFZTw04jY4g__" alt="Planting Mangroves">
                            <button class="prev"><</button>
                            <button class="next">></button>
                        </div>
                    </div>
                    <div class="event-list">
                        <ul>
                            <li>
                                <hr>
                                <h4>01</h4>
                                <p>Introducing the beauty of mangroves on a journey to the planting site.</p>
                            </li>
                            <li>
                                <hr>
                                <h4>02</h4>
                                <p>Working together with local farmers while planting each mangrove.</p>
                            </li>
                            <li>
                                <hr>
                                <h4>03</h4>
                                <p>Exploring the wonders of mangrove ecotourism, an educational adventure.</p>
                            </li>
                            <li>
                                <hr>
                                <h4>04</h4>
                                <p>Receive a plaque & badge, a mark of honor for every tree you plant.</p>
                            </li>
                            <li>
                                <hr>
                                <h4>05</h4>
                                <p>Coverage & documentation by news media, share your story of change!</p>
                            </li>
                        </ul>                        
                    </div>
                </div>
            </section>

            <section class="sponsors" id="sponsors">
                <div class="sponsors-header">
                    <div class="sponsors-header-content">
                        <h1>Sponsorship Packages</h1>
                        <p>Our sponsorship package offers branding, promotional opportunities, and visibility at our event,
                            ideal for enhancing company presence and community engagement.</p>
                    </div>
                </div>
                <div class="table-personal">
                    <h2>Personal Sponsorship Package</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Membership Tier</th>
                                <th>No. Seats</th>
                                <th>Pricing</th>
                                <th>Benefits</th>
                                <th>Discount</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="https://s3-alpha-sig.figma.com/img/c75d/9b3a/9591f99884925eb15055f84c813af896?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=BJ1rNcSb9~OnXGmDY8lLvpDEq3eNuS8A62jXvNZozw4Wvli3SZm~eVaknwCf-EClCrhm9f-644b3xqwWFYtnPrf5LS1dn-xGx92jeK7OqGHX38YiA5cSvKM~zHEgAmzVGVXRiBrueBFr2VyXFA1Nk7mFZKlQ0iCcB5tE468MGh~QzOTLRHPeX0nT0edowdOY3VX9JbW~BQXuijyz-PGeLeHayeajWjFO9UfLn55VafLcogZUIzSxqH3tRqKXWQWNzODWgvqqjZSjfEOri1S6G4fq5PbLmb0F2aj8fmbTBHtn1C5htoNe-~dXNajHndeCZGlb53FUYILUDcV9siaV9A__" alt="scout">Scout</td>
                                <td>5 Seeds</td>
                                <td>IDR 75K</td>
                                <td>Badge</td>
                                <td>4,900 Donors%</td>
                                <td><button class="btn-primary">Support Our Mission ></button></td>
                            </tr>
                            <tr>
                                <td><img src="https://s3-alpha-sig.figma.com/img/231b/0526/85e11e8c42888b8441d272e0b1cc14d6?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=sjlc~omPMBHkoQcT5mrDGg1NXPlTJJJqzuTq1lyjzAh-XzkUF1e4~m5Go6w6qENaen04saMqZlxNWrotSBiQ2uogqGIUKfCl-r7p9IzZVvIuf5kpNrkeq3HBMsU7mJs34JPryEAt5WAN~VkIg7JnKhH92f5sGc7No1CS0~SLzpQ0weCcv1zBlQhyAlHgtbdlaD3sNMGjrdEhnN12WvacrOVIIFtXT1d1afBJWWcySaNqckxAP~4DrGrtT-jIKRuXthao3s3uUa0PHbfdPFTVoZBwGydVNiwz0Qu5M0vFRxSe59gQ8p9aLRY0P1IUVGOzD2zI1jQyPttVmJpel1F4Tg__" alt="Sapling Savior">Sapling Savior</td>
                                <td>10 Seeds</td>
                                <td>IDR 150K</td>
                                <td>Badge + Pin</td>
                                <td>4,300 Donors</td>
                                <td><button class="btn-primary">Support Our Mission ></button></td>
                            </tr>
                            <tr>
                                <td><img src="https://s3-alpha-sig.figma.com/img/23db/8ba5/14a9cec4a82477dac94751b36612f401?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=GCKFv80uFMxssiM2SimSZb01LE6ZPBSngKeKTnqja92ofbv0VTZt1EWJ1XwMkcs1g93VnYnbhg3dqf-UP~WkDNDHQnh5Pw0MRmaFvIzEdwjkNBQeoEjqinu-BXMeC-IpuOc70xfP-optLSWi1z0tuK9ACPXT8DEFSAmKzRNTPu4xYc72rsf9uYiVe6M18E~fdemzSPjNOCSadxv2N1-Ep9iToLO4JwzahB0mjdL3PJOXOhsHkajYvuczkrlbhHqYW9xLRYd3417VMYxyDVCayL~kPTSE1qdVcenkzUMp8D2kovBxdznbE6sE0VWFLzzPUi5qX~6Gq6VSnBONcpNloA__" alt="Tree Titan">Tree Titan</td>
                                <td>20 Seeds</td>
                                <td>IDR 300K</td>
                                <td>Badge + Pin</td>
                                <td>15,000 Donors</td>
                                <td><button class="btn-primary">Support Our Mission ></button></td>
                            </tr>
                            <tr>
                                <td><img src="https://s3-alpha-sig.figma.com/img/2cfd/5172/5a4158aee6dc3ffc08d7a66f2eec83ba?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=eoaafUh3iXzDjd9CtCt1hdoecp1182dRdi6gmvB6tNIJNStZSvzrYYzZkUh-2EIzwVyOCe1x0yn3LG42UXwsv6XrPHn9R4u-ymFyZ274ondE5hQSDZERxhNcLjfBuuHu2zbEKSseAwiTnqaMp5G-GBvjt6opymgFwnIcmHjq13YVrFHbzly~sq5yzvmH79qpeejfawkNvbMJn99qDz3xZphL3XK9gzMs~GKeMVEhJ-8xPFvpddFjtKUK9zWItFolgZSjiCJnyzk3l~oOunLekdTJkh2itJmrdrPPnrhzOZlXRm4mJls1NtAxeBGEJotioGz1a1qd~QJDUrxyca6JIQ__" alt="Mangrove Master">Mangrove Master</td>
                                <td>50 Seeds</td>
                                <td>IDR 750K</td>
                                <td>Badge + Pin + Bag</td>
                                <td>5,000 Donors</td>
                                <td><button class="btn-primary">Support Our Mission ></button></td>
                            </tr>
                            <tr>
                                <td><img src="https://s3-alpha-sig.figma.com/img/c5d3/176f/ef393a73454cabec1ba57834c3aab772?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=rIHysFiXYCnktB0DE-6HI8hv55euFvE~-qhdJP8nt5q7e4J4kkYIiT0OwAMubgyTX8bUceEsYHDz~YGEJW7FllCR7PVYjupmiNtxrp0l2DmXtIpzlvF2VhHYGjT1cj2xlqBBNV-2jQTnW-1JMEmwhqrExfGe3ZnPcen2kP4EQh-rRguKpGv5IiN~ETPWuvuhuYOU8bEXe6swNCI83wBKbO-NYPeNRn6aGCmlkiQ~nc3ry35Lz9WKR03sGDCCpMCe9pQ9QqAhQWf6V2a-ryflAc8LfQiO3AL1KaPq30SGdxowl~Q6eYw6tfGYZXft-jGUHjYzA26ybpday9ZNU1kxfQ__" alt="Guardian of the Grove">Guardian of the Grove</td>
                                <td>100 Seeds</td>
                                <td>IDR 1,500K</td>
                                <td>Badge + Pin + Bag</td>
                                <td>300 Donors</td>
                                <td><button class="btn-primary">Support Our Mission ></button></td>
                            </tr>
                            <tr>
                                <td><img src="https://s3-alpha-sig.figma.com/img/f633/1045/5ff5048d7f61386b9f6dc6727b3b6257?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=PIBCVpjP-YpZ0aAgTV3rQYB43uXWZ1GjHynLd1DN01BT4Hko6M-RCJG-iaR2zWyXh~-jwTtGfQscwu9xdDyT74qSV-wd-560pxoPq8gDGjn13QJfd8k32WPfbQE1azbBZBbd-pRGKaLJ6eRD2wCnYAjU3SbtQlZQJEAcMH1rnXn1xueBI8Tg-YKfKxJNJGZTDkCt8r5pPDScE1rX947zTrG3a04dLIPHRWbGy0-53nJYkFljzfg0sET7M8k5qQBlUrOutwiTyIRE9PQmGsyb2iYcF9fLOeA1GRyxHexvQnSc2RexBOO~j2qWUsrUFxHTpnm-lHJU6ytHRXMeFhonTQ__" alt="Mangrove Maven">Mangrove Maven</td>
                                <td>200 Seeds</td>
                                <td>IDR 3,000K</td>
                                <td>Badge + Pin + Bag</td>
                                <td>10 Donors</td>
                                <td><button class="btn-primary">Support Our Mission ></button></td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                </div>
                <div class="table-corporate">
                    <h3>Corporate Sponsorship Package</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>Benefits</th>
                                <th>Eco Trailblazers</th>
                                <th>Green Innovators</th>
                                <th>Eco Vanguard</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Price</td>
                                <td>15 Million IDR</td>
                                <td>30 Million IDR</td>
                                <td>45 Million IDR</td>
                            </tr>
                            <tr>
                                <td>CO₂ Sequestration</td>
                                <td>22.5 ton/year</td>
                                <td>45 ton/year</td>
                                <td>67.5 ton/year</td>
                            </tr>
                            <tr>
                                <td>Number of Trees</td>
                                <td>1000 Trees</td>
                                <td>2000 Trees</td>
                                <td>3000 Trees</td>
                                <tr>
                                    <td>Logo on JCI Banner</td>
                                    <td><span class="checkmark"></span></td>
                                    <td><span class="checkmark"></span></td>
                                    <td><span class="checkmark"></span></td>
                                </tr>
                                <tr>
                                    <td>Logo on Communal Stainless Plate</td>
                                    <td><span class="checkmark"></span></td>
                                    <td><span class="checkmark"></span></td>
                                    <td><span class="checkmark"></span></td>
                                </tr>
                                <tr>
                                    <td>Considered as Main Sponsor</td>
                                    <td><span class="checkmark"></span></td>
                                    <td><span class="checkmark"></span></td>
                                    <td><span class="checkmark"></span></td>
                                </tr>
                                <tr>
                                    <td>Dedicated Stainless Plate</td>
                                    <td></td>
                                    <td><span class="checkmark"></span></td>
                                    <td><span class="checkmark"></span></td>
                                </tr>
                                <tr>
                                    <td>Report Update on Planted Trees</td>
                                    <td></td>
                                    <td><span class="checkmark"></span></td>
                                    <td><span class="checkmark"></span></td>
                                </tr>
                                <tr>
                                    <td>Logo on Event Clothings</td>
                                    <td></td>
                                    <td></td>
                                    <td><span class="checkmark"></span></td>
                                </tr>
                                
                                <td>
                                    <h4>Make a Donation</h4>
                                </td>
                                <td>
                                    <button class="btn-support">Support Our Mission ></button>            
                                </td>
                                <td>
                                    <button class="btn-support">Support Our Mission ></button>
                                </td>
                                <td>
                                    <button class="btn-support">Support Our Mission ></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>                
            </section>

            <section class="donate">
                <div class="donate-header">
                    <div class="donate-header-content">
                        <h1>Donate Today and be a
                            Guardian of the Green Belt.</h1>
                        <p>Join us in our mission to rejuvenate and protect our shorelines 
                            by donating to our mangrove planting project. </p>
                        <button>Support Our Mission ></button>
                    </div>
                </div>
                <div class="donate-images">
                    <span><img src="https://s3-alpha-sig.figma.com/img/bd69/a84f/4fb32e6b3fe5eb892ba8b7fbc3e657d9?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=J0DQGOFgTv~6aU8gZsn9niHrqPFLinE6q-L34x~1UEJOVbMFFyHARCu3hVqptTABSKs0IAO5PD8OUeEA5pHxxxS60rFoUHgWX7b9dZh~VGgBb38RaeiIU6amytbcjLD54lr45EjezpyzxkVo9O6YNAiarSuUoJqT0GUPLJXvrfNzBSKkdXH7vVh8YAeiG1-pRmd4oG5v29IMNFhvCLxClZpv79O9bIczt7sU-8d5h9q4nU7mq8xl1bPPvhr1DaSuqWBjOLHwNsm7z1gSn-4pSOa1W4yrvrmqx3Vgpl-g5-Ek8m-NN1h60uBeGhODLk8MWL76XQwAgIt7sPkCfU48kg__"alt="img-donate1"></span>
                    <span><img src="https://s3-alpha-sig.figma.com/img/1f03/86dc/f31c925df5a1364db7fed0400ffcfb61?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=glCYjUCIfKuyQ8aXDteBp48gQthdN8vHCfuoHQZg-J52OBDgcRvYiXPIoS-NIoJCCEzTvjoDv1Qoz0FuBbcRR~d44CapdAtgLT4Q2sKwkGDkaDtaM1zqLToU7yFx2aa4i7-jgHIlI~IriQtDXa0OHOFDatlb2VhaofKC1-uPgwe~4~yoWK3jZC2TuORgtpbX4SW1NR6u-Wy-tsl6S7dCz~4AS-e7G5wHrwBtlRaqO350rNMz~hXKezRRnaocZ436eu60ghlfL5Rvku95ljaJ6DLFVtoc7ySEJRvc-m44PQvytMP68uCHzaeowR0W4wAz9Fc2hpQKUEN-zJJQ~o4t8A__"alt="img-donate2"></span>
                    <span><img src="https://s3-alpha-sig.figma.com/img/16b7/317b/fa902781c4900abe9b9038bf24919450?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=SYjGAbEOeukoiskJPNPLbwe1yUlzrBXwTbvtbeoyyfrfxwjLcyQzRgvHaU3n0NQgK5~18cVyPnYFcHrLKF33nchgyeFxMDQRn45M4IkwOqvfJcfbIzm0o9HiV5SA32aHDK02XIH67AUACEaEjduxogY48OJNMoeCrblCIRj3qHn63LEFquT2XU-StRS547YSIDcSScvbXXRVf9Jo5hcBQY5jnExj8IgWHqT6pNM~o1XcTWZ9oDqAu7jm~cPwYnA1NtWtLIGip8OPoHlgSNUvbNUPEuCJ8wSBnWGmv3r5Imwuk~1yLA8DphCQ-~Uqec7juaNPFnQK2krDhWAEDoMtYg__"alt="img-donate3"></span>
                    <span><img src="https://s3-alpha-sig.figma.com/img/a488/7578/085ea968aa8b760e022f2a0786d47fd9?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=SAA6ZQIQkeJShfzWumbIET4LkICz-WMyQztr6Rb6WRem48ZEoYJ5Pv46~qpufhRN83uhE7eQCOTPfNDkBfjoFWJV4Q99qqzH5kLVqI3hxg8GuTArEF1rlFFhcds-zCtZNlPCmLxzHnMWWI~QlMo0HN~jvzADbT-EzvWq1gP9ZKbdTxqXXfXxrsMCqLVowaJgPpiwhWNH9wVfv72ek2pAgH4d69gVHHLp-gwBnwmmSGUzqJltH1M5ZDp2W98d2jyccbhdFxN4~GIOpATRZeOCqZIRO~ysJMGYTD0X9XPX77XHBD73I8qv3IennKhw3qcls0LwDuKnKA3ibRwoQRnT2A__"alt="img-donate4"></span>
                    <span><img src="https://s3-alpha-sig.figma.com/img/236a/dbd5/c12cc51c6f95bf0376bbf8b307a3f848?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=mYp1NdYLsZ0I1Pi4uCL7uZK3zrNxJ~rzIp-x6uXcfvqkFXS-M7h8Gp5vzdTNG1M~yKbsT4esmG55br-YdKtxckXao6Op4FpiMbcDWrdz356lzSJEY-Rw-hmjYojW0XjTFLe~eSw1wyngf2RALTgqhMWO9K5hdY~jWMKK74fXYpmDR4JLAxcr1~oNPdfOsXIIIWfz~7lrU5jHOmxnza~QfIPpCtztv3LWpxEnoA5faKA4vgqGk1I1Doss-bv90K91ILUtAMwEXKsigvkb-OK0x~y0RnyR7CG7-ZzN3DSn9ZeofSY5J3JIBoL048IdGrK~H~VqQqf7ZChEJqe5icxEOA__"alt="img-donate5"></span>
                </div>
            </section>

            <section class="colom-nama">
                <h1>Danar Adrian Ridho Nugroho🚀</h1>
            </section>
        </div>
    </body>
</html>
