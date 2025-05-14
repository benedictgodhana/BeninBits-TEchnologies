<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head content remains same as original -->
    <style>
        :root {
            --primary-color: #4F46E5; /* Indigo */
            --primary-hover: #4338CA;
            --text-color: #333333;
            --bg-color: #FFFFFF;
            --light-gray: #F5F5F5;
        }

        /* Rest of styles remain similar with status badge adjustments */
        .badge-published { background-color: #C6F6D5; color: #22543D; }
        .badge-draft { background-color: #E9D8FD; color: #553C9A; }
        .badge-archived { background-color: #E2E8F0; color: #4A5568; }
        /* Add new status colors */
              .badge-discontinued { background-color: #E2E8F0; color: #4A5568; }

        .badge-instock {
    background-color: #28a745; /* Green */
    color: white;
    font-weight: bold;
}

.badge-outofstock {
    background-color: #dc3545; /* Red */
    color: white;
    font-weight: bold;
}

    </style>
</head>
<body>
    <x-app-layout>
        <div class="container-fluid py-4" x-data="{
            searchQuery: '',
            partners: [],
            filteredpartners: [],
            init() {
                this.partners = Array.from(document.querySelectorAll('#partnerTableBody tr'))
                    .map(row => {
                        return {
                            element: row,
                            name: row.querySelector('td:nth-child(1)').textContent.trim().toLowerCase(),
                            sku: row.querySelector('td:nth-child(2)').textContent.trim().toLowerCase(),
                            cardElement: document.querySelector(`.partner-card[data-id='${row.getAttribute('data-id')}']`)
                        };
                    });
                this.filterpartners();
            },
            filterpartners() {
                const query = this.searchQuery.toLowerCase();
                this.filteredpartners = this.partners.filter(partner =>
                    partner.name.includes(query) || partner.sku.includes(query)
                );
                // Rest of filter logic remains same
            }
        }">
            <div class="card p-4">


            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert" id="successAlert"
                    x-init="setTimeout(() => { document.getElementById('successAlert').remove() }, 4000)">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-check-circle me-2"></i>
                        {{ session('success') }}
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <!-- Header section -->
                <div class="d-flex justify-content-between align-items-center page-header">
                    <h1 class="text-2xl font-bold text-gray-800">
                        <i class="fas fa-cube me-2" style="color: var(--primary-color)"></i>partner Management
                    </h1>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addpartnerModal">
                        <i class="fas fa-plus me-1"></i> Add partner
                    </button>
                </div>
                <div class="flex justify-between items-center mb-6">
    <!-- Search and Filter Form -->
    <form method="GET" action="{{ route('partners.index') }}" class="flex space-x-3">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Search partners..."
            class="border border-gray-300 px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">



      <!-- Search Button -->
<button type="submit" class="bg-primary text-white px-4 py-2 rounded-md hover:bg-opacity-90 flex items-center space-x-2">
    <i class="fas fa-search"></i>
    <span>Search</span>
</button>

<!-- Reset Button -->
<a href="{{ route('partners.index') }}" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 flex items-center space-x-2"
   style="text-decoration: none;">
    <i class="fas fa-sync-alt"></i>
    <span>Reset</span>
</a>

    </form>
</div>



                <!-- Table Structure -->
                <div class="partners-table table-responsive">
                <table class="table table-hover align-middle">
                <thead>
        <tr>
            <th>Logo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Website</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody id="partnerTableBody">
        @foreach ($partners as $partner)
        <tr data-id="{{ $partner->id }}">
        <td><img src="{{ asset('storage/' . $partner->logo) }}" width="50"></td>
            <td>{{ $partner->name }}</td>
            <td>{{ $partner->email }}</td>
            <td>{{ $partner->phone }}</td>
            <td><a href="{{ $partner->website }}" target="_blank">Visit</a></td>
            <td>
                <!-- Edit/Delete buttons can go here -->
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editpartnerModal{{ $partner->id }}">
        Edit
    </button>

    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletepartnerModal{{ $partner->id }}">
        <i class="fas fa-trash-alt"></i>
    </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

                </div>

<!-- Add Partner Modal -->
<div class="modal fade" id="addpartnerModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fas fa-handshake me-2"></i> Add New Partner</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('partners.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Partner Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="col-md-6">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone">
                        </div>

                        <div class="col-md-6">
                            <label for="website" class="form-label">Website</label>
                            <input type="url" class="form-control" id="website" name="website" placeholder="https://example.com">
                        </div>

                       

                        <div class="col-md-6">
                            <label for="logo_url" class="form-label">Partner Logo</label>
                            <input type="file" class="form-control" id="logo_url" name="logo_url" accept="image/*">
                        </div>
                    </div>

                    <div class="text-end mt-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-2"></i> Save Partner
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Partner Modal -->
@foreach ($partners as $partner)
<div class="modal fade" id="editpartnerModal{{ $partner->id }}" tabindex="-1" aria-labelledby="editpartnerModalLabel{{ $partner->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg"> <!-- Adjusted modal size -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editpartnerModalLabel{{ $partner->id }}">
                    <i class="fas fa-cube me-2"></i> Edit Partner
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('partners.update', $partner->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row g-3">
                        <!-- Partner Name -->
                        <div class="col-12">
                            <label for="name{{ $partner->id }}" class="form-label">Partner Name</label>
                            <input type="text" class="form-control" id="name{{ $partner->id }}" name="name" value="{{ $partner->name }}" required>
                        </div>



                        <!-- Website -->
                        <div class="col-md-6">
                            <label for="website{{ $partner->id }}" class="form-label">Website</label>
                            <input type="url" class="form-control" id="website{{ $partner->id }}" name="website" value="{{ $partner->website }}">
                        </div>

                        <!-- Email -->
                        <div class="col-md-6">
                            <label for="email{{ $partner->id }}" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email{{ $partner->id }}" name="email" value="{{ $partner->email }}">
                        </div>

                        <!-- Phone -->
                        <div class="col-md-6">
                            <label for="phone{{ $partner->id }}" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone{{ $partner->id }}" name="phone" value="{{ $partner->phone }}">
                        </div>

                        <!-- Partner Image -->
                        <div class="col-md-6">
                            <label for="logo{{ $partner->id }}" class="form-label">Partner Logo</label>

                            @if($partner->logo)
                                <div class="mb-3">
                                    <img src="{{ asset('storage/' . $partner->logo) }}" alt="Partner Logo" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endif

                            <input type="file" class="form-control" id="logo{{ $partner->id }}" name="logo" accept="image/*">
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-end mt-4">
                        <button type="submit" class="btn btn-primary">Update Partner</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach



@foreach ($partners as $partner)
<div class="modal fade" id="deletepartnerModal{{ $partner->id }}" tabindex="-1" aria-labelledby="deletepartnerModalLabel{{ $partner->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deletepartnerModalLabel{{ $partner->id }}">
                    <i class="fas fa-trash-alt me-2"></i>Confirm Delete
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete <strong>{{ $partner->name }}</strong>? This action cannot be undone.</p>
            </div>
            <div class="modal-footer">
                <form action="{{ route('partners.destroy', $partner->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

    </x-app-layout>

    <!-- Scripts remain same -->
    <script>
        // Initialize CKEditor for partner description
        document.querySelectorAll('.rich-text-editor').forEach(editor => {
            CKEDITOR.replace(editor);
        });
    </script>
</body>
</html>
