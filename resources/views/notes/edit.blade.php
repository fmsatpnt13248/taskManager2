<x-layout>
    <div class="card mt-5">
        <h2 class="card-header">Edit the note</h2>
        <div class="card-body">

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary btn-sm" href="{{ route('notes.index') }}"><i class="fa fa-arrow-left"></i>
                    Back</a>
            </div>

            <form action="{{ route('notes.update',$note->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="inputName" class="form-label"><strong>Name:</strong></label>
                    <input
                        type="text"
                        name="name"
                        value="{{ $note->name }}"
                        class="form-control @error('name') is-invalid @enderror"
                        id="inputName"
                        placeholder="Name">
                    @error('name')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputDetail" class="form-label"><strong>Detail:</strong></label>
                    <textarea
                        class="form-control @error('detail') is-invalid @enderror"
                        style="height:150px"
                        name="detail"
                        id="inputDetail"
                        placeholder="Detail">{{ $note->detail }}</textarea>
                    @error('detail')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Update</button>
            </form>

        </div>
    </div>
</x-layout>
