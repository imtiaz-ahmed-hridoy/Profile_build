{{-- Navbar_Section_start --}}


@section('navbar')

    <nav class="navbar" style='--navbarcolor: #388087;>





        <ul class="overflow-hidden">

            <li class="list" style="--navbaricon:red;--navbariconborder:gold;">

                <a href="#" class="menuLink">
                    {{-- <div class="iconborder  " style="--iconborder:#e4e4e4;"></div> --}}
                    <span class="navicon"><span id="home" class="hidden">
                            <lord-icon src="https://cdn.lordicon.com/cnpvyndp.json" trigger="in" state="morph-home-2"
                                colors="primary:#e4e4e4" style="width:50px;height:50px">
                            </lord-icon></span></span>
                    <span style="--navtext: #f7f7f7;" class='navtext'>HOME  <div class="iconborder" ></div></span>


                </a>
            </li>
            <li class="list" style="--navbaricon:green;">

                <a href="#" class="menuLink">
                    {{-- <div class="iconborder  " style="--iconborder:#e4e4e4;"></div> --}}
                    <span class="navicon"><lord-icon src="https://cdn.lordicon.com/kthelypq.json" trigger="in"
                            delay="1500" state="in-account" colors="primary:#e4e4e4" style="width:50px;height:50px">
                        </lord-icon></span>
                    <span style="--navtext: #f7f7f7;" class='navtext'>ABOUT <div class="iconborder" ></div></span>

                </a>
            </li>
            <li class="list" style="--navbaricon:blue;">
                <a href="#" class="menuLink">
                    {{-- <div class="iconborder " style="--iconborder:#e4e4e4;"></div> --}}
                    <span class="navicon"><lord-icon src="https://cdn.lordicon.com/lzgmgrnn.json" trigger="in"
                            delay="1500" trigger="hover" state="in-code" colors="primary:#e4e4e4"
                            style="width:50px;height:50px">
                        </lord-icon></span>
                    <span style="--navtext: #f7f7f7;" class='navtext'>SKILL <div class="iconborder" ></div></span>

                </a>
            </li>
            <li class="list" style="--navbaricon:yellow;">
                <a href="#" class="menuLink">
                    {{-- <div class="iconborder " style="--iconborder:#e4e4e4;"></div> --}}
                    <span class="navicon"><lord-icon src="https://cdn.lordicon.com/ppyvfomi.json" trigger="in"
                            delay="1500" state="in-work" colors="primary:#e4e4e4" style="width:50px;height:50px">
                        </lord-icon></span>
                    <span style="--navtext: #f7f7f7;" class='navtext'>WORK <div class="iconborder" ></div></span>

                </a>
            </li>
            <li class="list" style="--navbaricon:maroon;">
                <a href="#" class="menuLink">
                    {{-- <div class="iconborder " style="--iconborder:#e4e4e4;"></div> --}}
                    <span id="call" class="navicon  hidden "><lord-icon src="https://cdn.lordicon.com/rsvfayfn.json"
                            trigger="in" state="morph-phone-ring" colors="primary:#e4e4e4" style="width:50px;height:50px">
                        </lord-icon></span>

                    <span style="--navtext: #f7f7f7;" class='navtext'>CONTACT <div class="iconborder" ></div></span>

                </a>

            </li>


            <div class="indicator"></div>


        </ul>


    </nav>

    <script>
        // this 2 script for navbar home and contact icon animation

        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(() => {
                document.getElementById('home').classList.remove('hidden');
                document.getElementById('home').style.opacity = 1;

            }, 1600);
        });

        //this script for home icon end

        //this script for contact icon

        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                document.getElementById("call").classList.remove("hidden");
                document.getElementById("call").style.opacity = 1;
            }, 1600);
        });

        //this 2 script for navbar home and contact icon animation end

        //this script for menu list start
        const list = document.querySelectorAll(".list");

        function activeLink() {

            list.forEach((item) =>
                item.classList.remove('active'));
            this.classList.add('active')

        }

        list.forEach((item) =>
            item.addEventListener("click", activeLink))
        //this script for menu list end
    </script>
@stop
{{-- Navbar_Section_end --}}
