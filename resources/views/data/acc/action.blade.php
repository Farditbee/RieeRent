<div class="d-flex">

    <a href="{{ route('data.acc.edit', $s->id) }}" class="btn btn-sm btn-warning d-flex align-items-center">
        <i class="fas fa-pen"></i>
        <span class="ml-1">
            Edit
        </span>
    </a>

    <form action="{{ route('data.acc.destroy', $s->id) }}" method="post" class="w-full ml-2">
        @csrf
        @method('DELETE')
        <button class="btn btn-sm btn-danger d-flex align-items-center w-full" onclick="return confirm('Apakah Anda yakin ingin menghapus data Aksesoris ini?')">
            <i class="fas fa-trash"></i>
            <span class="ml-1">
                Hapus
            </span>
        </button>
    </form>
</div>
