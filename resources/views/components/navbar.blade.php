<nav>
    <div class="content flex justify-start px-24 mt-9">
        <h1 class="text-3xl"><a href="/admin"> Admin </a> </h1>
        <ul  class="flex">
            <li class="mx-8"><a href="/admin/rooms">Rooms</a></li>
            <li class="mx-8"><a href="/admin/hotels">Hotels</a></li>
            <li class="mx-8"><a href="/admin/reservations">Bookings</a></li>
            @auth
            <li class="mx-8 justify-self-end">
                <form action="/logout" class="" method="post">
                    @csrf
                    <button>Logout</button>
                </form>
            </li>
            @endauth
        </ul>
    </div>
</nav>