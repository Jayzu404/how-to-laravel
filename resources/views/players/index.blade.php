
<x-layout>
  <h1 class="text-center text-2xl font-semibold mt-7">Players</h1>
  <ul class="space-y-2 flex flex-col justify-between bg-gray-100 rounded-sm shadow-sm py-5 mt-5 min-w-sm max-w-3xl m-auto">
    @foreach($players as $player)
      <li class="w-full flex justify-between px-10"><div class="ign inline-block mr-10">{{$player["ign"]}} </div><a href="/player/{{$player["id"]}}" class="btn">View</a></li>
    @endforeach
  </ul>
</x-layout>