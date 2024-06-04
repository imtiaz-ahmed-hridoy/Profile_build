{{-- Navbar_Section_start --}}


@section('navbar')



    <nav class="navbar  " style="--navbarcolor:rgba(49, 118, 14, 0.858);">

        {{--  --}}



        <ul >

            <li class="list" style="--navbaricon:rgb(114, 80, 80);--navbariconborder:rgb(0, 0, 0);">

                <a href="#" class="menuLink">
                    {{-- <div class="iconborder  " style="--iconborder:#e4e4e4;"></div> --}}
                    <span class="navicon " ><span id="home" class="hidden">
                            <lord-icon src="https://cdn.lordicon.com/cnpvyndp.json" trigger="in"
                            delay="200" state="morph-home-2"
                                colors="primary:#e4e4e4" style="width:50px;height:50px">
                            </lord-icon></span></span>
                    <span style="--navtext: #f7f7f7;" class='navtext'>HOME  <div class="iconborder" ></div></span>


                </a>
            </li>
            <li class="list" style="--navbaricon:green;">

                <a href="#about" class="menuLink">
                    {{-- <div class="iconborder  " style="--iconborder:#e4e4e4;"></div> --}}
                    <span class="navicon"><lord-icon src="https://cdn.lordicon.com/kthelypq.json" trigger="in"
                            delay="200" state="in-account" colors="primary:#e4e4e4" style="width:50px;height:50px">
                        </lord-icon></span>
                    <span style="--navtext: #f7f7f7;" class='navtext'>ABOUT <div class="iconborder" ></div></span>

                </a>
            </li>
            <li class="list" style="--navbaricon:blue;">
                <a href="#skill" class="menuLink">

                    <span class="navicon"><lord-icon src="https://cdn.lordicon.com/lzgmgrnn.json" trigger="in"
                            delay="200" trigger="hover" state="in-code" colors="primary:#e4e4e4"
                            style="width:50px;height:50px">
                        </lord-icon></span>
                    <span style="--navtext: #f7f7f7;" class='navtext'>SKILL <div class="iconborder" ></div></span>

                </a>
            </li>
            <li class="list" style="--navbaricon:yellow;">
                <a href="#work" class="menuLink">

                    <span class="navicon"><lord-icon src="https://cdn.lordicon.com/ppyvfomi.json" trigger="in"
                            delay="300" state="in-work" colors="primary:#e4e4e4" style="width:50px;height:50px">
                        </lord-icon></span>
                    <span style="--navtext: #f7f7f7;" class='navtext'>WORK <div class="iconborder" ></div></span>

                </a>
            </li>
            <li class="list" style="--navbaricon:maroon;">
                <a href="" class="menuLink">

                    <span id="call" class="navicon  hidden "><lord-icon src="https://cdn.lordicon.com/rsvfayfn.json"
                            trigger="in"
                            delay="300"
                            state="morph-phone-ring" colors="primary:#e4e4e4" style="width:50px;height:50px">
                        </lord-icon></span>

                    <span style="--navtext: #f7f7f7;" class='navtext'>CONTACT <div class="iconborder" ></div></span>

                </a>

            </li>


            <div class="indicator" ></div>


        </ul>

    </nav>




@stop
{{-- Navbar_Section_end --}}
