<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apple music</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="font-sf-pro">
<x-apple-music.header></x-apple-music.header>
<div class="bg-[#000000] pb-4 pt-4">
    <main class="container mx-auto px-2 flex flex-col gap-4">
        <div class="flex justify-between">
            <span class="text-red flex gap-2">
                <svg width="21" height="24" viewBox="0 0 21 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 19L5 12L12 5" stroke="#FB0808" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>
            Library
            </span>
            <span class="text-red">
                Sort
            </span>
        </div>
        <h1 class="text-white text-3xl">Songs</h1>
        <div class="flex justify-between gap-4 mb-4">
            <div class="bg-bg-button flex-1 flex justify-center items-center gap-2 py-3 rounded-md">
            <span class="text-red text-lg">
                Play
            </span>
                <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11.8938 8.54504L2.34926 14.083C1.53926 14.5525 0.499756 13.984 0.499756 13.0375V1.96155C0.499756 1.01655 1.53776 0.446545 2.34926 0.917545L11.8938 6.45554C12.078 6.56073 12.2312 6.71278 12.3377 6.89626C12.4442 7.07974 12.5003 7.28813 12.5003 7.5003C12.5003 7.71246 12.4442 7.92085 12.3377 8.10433C12.2312 8.28782 12.078 8.43986 11.8938 8.54504Z"
                        fill="#FB0808"/>
                </svg>
            </div>
            <div class="bg-bg-button flex-1 flex justify-center items-center gap-2 py-3 rounded-md">
            <span class="text-red">
                Shuffle
            </span>
                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M0 5.75C0 5.55109 0.0790176 5.36032 0.21967 5.21967C0.360322 5.07902 0.551088 5 0.75 5H1.5C4.803 5 7.2405 6.86 8.811 8.627C9.546 9.455 10.1085 10.28 10.5 10.925C10.89 10.28 11.454 9.455 12.189 8.627C13.7595 6.86 16.197 5 19.5 5V6.5C16.803 6.5 14.7405 8.015 13.311 9.623C12.538 10.4985 11.8742 11.4646 11.334 12.5C11.8737 13.5354 12.5371 14.5014 13.3095 15.377C14.742 16.985 16.806 18.5 19.5 18.5V20C16.197 20 13.7595 18.14 12.189 16.373C11.5583 15.6592 10.993 14.8901 10.5 14.075C10.11 14.72 9.546 15.545 8.811 16.373C7.2405 18.14 4.803 20 1.5 20H0.75C0.551088 20 0.360322 19.921 0.21967 19.7803C0.0790176 19.6397 0 19.4489 0 19.25C0 19.0511 0.0790176 18.8603 0.21967 18.7197C0.360322 18.579 0.551088 18.5 0.75 18.5H1.5C4.197 18.5 6.2595 16.985 7.689 15.377C8.46195 14.5015 9.1258 13.5354 9.666 12.5C9.12627 11.4646 8.46292 10.4986 7.6905 9.623C6.258 8.015 4.194 6.5 1.5 6.5H0.75C0.551088 6.5 0.360322 6.42098 0.21967 6.28033C0.0790176 6.13968 0 5.94891 0 5.75Z"
                          fill="#FB0808"/>
                    <path
                        d="M19.5 8.69901V2.80101C19.5 2.72975 19.5204 2.65998 19.5586 2.59986C19.5969 2.53974 19.6514 2.49176 19.716 2.46154C19.7805 2.43132 19.8523 2.42011 19.923 2.42923C19.9936 2.43834 20.0602 2.4674 20.115 2.51301L23.655 5.46201C23.835 5.61201 23.835 5.88801 23.655 6.03801L20.115 8.98701C20.0602 9.03261 19.9936 9.06167 19.923 9.07079C19.8523 9.0799 19.7805 9.06869 19.716 9.03847C19.6514 9.00825 19.5969 8.96028 19.5586 8.90016C19.5204 8.84004 19.5 8.77026 19.5 8.69901ZM19.5 22.199V16.301C19.5 16.2298 19.5204 16.16 19.5586 16.0999C19.5969 16.0397 19.6514 15.9918 19.716 15.9615C19.7805 15.9313 19.8523 15.9201 19.923 15.9292C19.9936 15.9383 20.0602 15.9674 20.115 16.013L23.655 18.962C23.835 19.112 23.835 19.388 23.655 19.538L20.115 22.487C20.0602 22.5326 19.9936 22.5617 19.923 22.5708C19.8523 22.5799 19.7805 22.5687 19.716 22.5385C19.6514 22.5083 19.5969 22.4603 19.5586 22.4002C19.5204 22.34 19.5 22.2703 19.5 22.199Z"
                        fill="#FB0808"/>
                </svg>
            </div>
        </div>

        @for ($i = 0; $i <= 10; $i++)
            <div class="flex gap-3">
                <img class="rounded" src="https://placehold.co/48x48">
                <div class="flex-1">
                    <h2 class="text-white">Name</h2>
                    <span class="text-[#999999]">Artist</span>
                    @if($i < 10)
                    <div class="border-t-[1px] border-[#999999]"></div>
                    @endif
                </div>
            </div>
        @endfor

    </main>
</div>
<x-apple-music.nav></x-apple-music.nav>
</body>
</html>
