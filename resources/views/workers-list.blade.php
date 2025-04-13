<!-- resources/views/workers-list.blade.php -->
<div id="workers-list">
    @forelse($workers as $worker)
    <a href="detail/{{ $worker->id }}">

        <div class="worker-item p-4 mb-2 bg-gray-800 text-white rounded-lg shadow-md hover:bg-gray-700">
            {{ $worker->surname }} {{ $worker->firstname }}
        </div>
    </a>
    @empty
        <p class="text-center text-red-500">No workers found.</p>
    @endforelse
</div>

