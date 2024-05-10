{{-- Navbar_Section_start --}}


@section('navbar')

    <nav class="navbar">

        <ul>
            <li class="list active" style="--navbaricon:red;">
                <a href="#" class="menuLink">
                    <span class="navicon">
                        <lord-icon
    src="https://cdn.lordicon.com/cnpvyndp.json"
    trigger="in"
    state="morph-home-2"
    colors="primary:#e4e4e4"
    style="width:50px;height:50px">
</lord-icon></span>
                    <span class='navtext'>Home</span>

                </a>
            </li>
            <li class="list"  style="--navbaricon:green;">
                <a href="#" class="menuLink">
                    <span class="navicon"><lord-icon
                        src="https://cdn.lordicon.com/kthelypq.json"
                        trigger="in"
                        state="in-account"
                        colors="primary:#e4e4e4"
                        style="width:50px;height:50px">
                    </lord-icon></span>
                    <span class='navtext'>About</span>

                </a>
            </li>
            <li class="list" style="--navbaricon:blue;">
                <a href="#" class="menuLink">
                    <span class="navicon"><lord-icon
                        src="https://cdn.lordicon.com/lzgmgrnn.json"
                        trigger="in"
                        trigger="hover"
                        state="in-code"
                        colors="primary:#e4e4e4"
                        style="width:50px;height:50px">
                    </lord-icon></span>
                    <span class='navtext'>Skill</span>

                </a>
            </li>
            <li class="list" style="--navbaricon:yellow;">
                <a href="#" class="menuLink">
                    <span class="navicon"><lord-icon
                        src="https://cdn.lordicon.com/lxrsqlrx.json"
                        trigger="hover"
                         style="width:;height:">
                    </lord-icon></span>
                    <span class='navtext'>Work</span>

                </a>
            </li>
            <li class="list" style="--navbaricon:maroon;">
                <a href="#" class="menuLink">
                    <span class="navicon"><lord-icon
                        src="https://cdn.lordicon.com/srsgifqc.json"
                        trigger="hover"
                        style="width:;height:">
                    </lord-icon></span>
                    <span class='navtext'>Contact</span>

                </a>
            </li>

            <div class="indicator"></div>

        </ul>



    </nav>

    <script>

        const list = document.querySelectorAll(".list");
        function activeLink(){

            list.forEach((item)=>
            item.classList.remove('active'));
            this.classList.add('active')

        }

        list.forEach((item)=>
        item.addEventListener("click",activeLink))




    </script>
@stop
{{-- Navbar_Section_end --}}
