<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<body>
    <!-- Sidebar Section -->
    <div class="container flex flex-row text-start bg- text-textColorLight">
        <div class="sidebar flex flex-col bg-sideBarLight w-52 h-auto p-4  text-textColorLight  border-x-slate-900  text-center">
            <div class="brand flex items-center ml-4">
                <div class="brand-logo">
                    <img  class= "size-6" src="{{'images/logo.png'}}" alt="">
                </div>
                <div class="brand-title mx-3">
                    <h1 class="text-2xl font-sans font-bold text-titleColorLight">StudyIT</h1>
                </div>
            </div>
            <div class="dashboard text-start mt-4">
                <h2 class="text-md font-mono font-bold">DASHBOARD</h2>
                <div class="list-dashboard ">
                    <ul class="pt-3">
                        <div class="btn border-2 border-transparent py-3 hover:bg-textColorLight p-3 hover:text-hoverLight  hover:rounded-lg active:bg-activeLight "> 
                            <li class="flex flex-row text-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6" class="size-5 mr-3">
                                    <path strokeLinecap="round" strokeLinejoin="round" d="m7.875 14.25 1.214 1.942a2.25 2.25 0 0 0 1.908 1.058h2.006c.776 0 1.497-.4 1.908-1.058l1.214-1.942M2.41 9h4.636a2.25 2.25 0 0 1 1.872 1.002l.164.246a2.25 2.25 0 0 0 1.872 1.002h2.092a2.25 2.25 0 0 0 1.872-1.002l.164-.246A2.25 2.25 0 0 1 16.954 9h4.636M2.41 9a2.25 2.25 0 0 0-.16.832V12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 12V9.832c0-.287-.055-.57-.16-.832M2.41 9a2.25 2.25 0 0 1 .382-.632l3.285-3.832a2.25 2.25 0 0 1 1.708-.786h8.43c.657 0 1.281.287 1.709.786l3.284 3.832c.163.19.291.404.382.632M4.5 20.25h15A2.25 2.25 0 0 0 21.75 18v-2.625c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125V18a2.25 2.25 0 0 0 2.25 2.25Z" />
                                </svg>
                                <a href="/">Summary</a>
                            </li>
                        </div>
                        <div class="btn border-2 border-transparent py-3 hover:bg-textColorLight p-3 hover:text-hoverLight  hover:rounded-lg active:bg-activeLight ">
                            <li class="flex flex-row text-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6" class="size-5 mr-3">
                                    <path strokeLinecap="round" strokeLinejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                </svg>
                                <a href="/message">Message</a>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="curriculum text-start mt-4">
                <h2 class="ttext-sm font-mono font-bold">CURRICULUM</h2>
                <div class="list-curriculum ">
                    <ul class="pt-3">
                        <div class="btn border-2 border-transparent py-3 hover:bg-textColorLight p-3 hover:text-hoverLight  hover:rounded-lg active:bg-activeLight ">
                            <li class="flex flex-row text-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6" class="size-5 mr-3">
                                    <path strokeLinecap="round" strokeLinejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                            </svg>
                            
                            <a href="/subjects">Subject</a>
                        </li>
                    </div>
                    <div class="btn border-2 border-transparent py-3 hover:bg-textColorLight p-3 hover:text-hoverLight  hover:rounded-lg active:bg-activeLight ">
                        <li class="flex flex-row text-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6"  class="size-5 mr-3">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 0 0-1.883 2.542l.857 6a2.25 2.25 0 0 0 2.227 1.932H19.05a2.25 2.25 0 0 0 2.227-1.932l.857-6a2.25 2.25 0 0 0-1.883-2.542m-16.5 0V6A2.25 2.25 0 0 1 6 3.75h3.879a1.5 1.5 0 0 1 1.06.44l2.122 2.12a1.5 1.5 0 0 0 1.06.44H18A2.25 2.25 0 0 1 20.25 9v.776" />
                        </svg>


                            <a href="/moduls">Modul</a>
                        </li>
                    </div>
                    <div class="btn border-2 border-transparent py-3 hover:bg-textColorLight p-3 hover:text-hoverLight  hover:rounded-lg active:bg-activeLight ">
                        <li class="flex flex-row text-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6"  class="size-5 mr-3">
  <path strokeLinecap="round" strokeLinejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
</svg>

                            <a href="/instructors">Instructor</a>
                        </li>
                    </div>
                    </ul>
                </div>
            </div>
            <div class="curriculum text-start mt-4">
                <h2 class="ttext-sm font-mono font-bold">STUDENTS</h2>
                <div class="list-curriculum ">
                    <ul class="pt-3">
                        <div class="btn border-2 border-transparent py-3 hover:bg-textColorLight p-3 hover:text-hoverLight  hover:rounded-lg active:bg-activeLight ">
                            <li class="flex flex-row text-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6"  class="size-5 mr-3">
    <path strokeLinecap="round" strokeLinejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
    </svg>
                      
                                <a href="/students">Students</a>
                            </li>
                        </div>
                    <div class="btn border-2 border-transparent py-3 hover:bg-textColorLight p-3 hover:text-hoverLight  hover:rounded-lg active:bg-activeLight ">
                        <li class="flex flex-row text-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6" class="size-5 mr-3">
  <path strokeLinecap="round" strokeLinejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
</svg>




                            <a href="/tasks">Task</a>
                        </li>
                    </div>
                    <div class="btn border-2 border-transparent py-3 hover:bg-textColorLight p-3 hover:text-hoverLight  hover:rounded-lg active:bg-activeLight ">
                        <li class="flex flex-row text-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6" class="size-5 mr-3">
  <path strokeLinecap="round" strokeLinejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0 .229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1 1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z" />
</svg>

                            <a href="/certificates">Certificate</a>
                        </li>
                    </div>
                    </ul>
                </div>
            </div>
        </div>
        <div class="contet p-4">
            @yield('content')
            <h1 class="text-textColorLight font-bold text-3xl">@yield('content-title')</h1>
        </div>
    </div>
    <!-- End Sidebar Section -->
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const currentLocation = window.location.pathname; // Mendapatkan path URL saat ini
        const menuItems = document.querySelectorAll('.btn'); // Mengambil semua elemen dengan class .btn
        console.log(currentLocation)
        menuItems.forEach(item => {
            const link = item.querySelector('a'); // Mengambil elemen <a> dalam .btn
            if (link && link.getAttribute('href') === currentLocation) {
                item.classList.add('bg-activeLight', 'text-hoverLight', 'rounded-lg'); // Menggunakan Tailwind untuk gaya aktif
            }
        });
    });
</script>

</body>
</html>