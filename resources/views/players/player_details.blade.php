<x-layout>
  <h1 class="mt-9 mb-2 font-semibold text-3xl text-center">Player Details</h1>
  <x-card>
    <div class="id">
      <p class="detail-label">ID:</p> {{ $player['id'] }}
    </div>

    <div class="ign">
      <p class="detail-label">IGN:</p> {{ $player['ign'] }}
    </div>

    <div class="current-rank">
      <p class="detail-label">Current Rank:</p> {{ $player['current_rank'] }}
    </div>

    <div class="highest-rank">
      <p class="detail-label">Highest Rank:</p> {{ $player['highest_rank'] }}
    </div>
  </x-card>
</x-layout>