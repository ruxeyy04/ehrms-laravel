<x-app-layout>
    <div class="container-fluid">
        <!-- Page title & breadcrumb -->
        <x-breadcrumb />
        <div class="fx-card">
            <div class="row">
                <div id="dealtbl">
                    <div class="fx-card-header">
                        <h4 class="fx-card-title">Links</h4>

                        <a href="javascript:void(0)"><button type="button" data-bs-toggle="modal" data-bs-target="#addLink"
                                class="btn btn-dark btn-sm mb-3">Add
                                Link</button></a>
                    </div>
                    <div class="fx-card-content card-default">
                        <div class="deal-table">
                            <div class="table-responsive">
                                <table id="recent-employee-table" class="table">
                                    <thead>
                                        <tr>
                                            <th>Thumbnail Image</th>
                                            <th>Event Title</th>
                                            <th>Link</th>
                                            <th>Event Date</th>
                                            <th>Date Inserted</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p>test</p>
                                            </td>
                                            <td>
                                                <p>test</p>
                                            </td>
                                            <td>
                                                <p>test</p>
                                            </td>
                                            <td>
                                                <p>test</p>
                                            </td>
                                            <td>
                                                <p>test</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-modal icon="ri-link" modal_title="Add Link" modal_type="fade" id="addLink" tabindex="-1"
        aria-labelledby="addDepartmentLabel" aria-hidden="true" modal_size="" modal_mode="" buttons="false"
        route-save="">

        <form action="" class="p-2">
            <div class="mb-3">
                <label for="formFile" class="form-label">Select Thumbnail Image</label>
                <input class="form-control" type="file" id="formFile">
            </div>

            <div class="mb-3">
                <label class="form-label">Event Title</label>
                <input class="form-control" type="text" placeholder="Enter event title">
            </div>

            <div class="mb-3">
                <label class="form-label">Link</label>
                <input class="form-control" type="text" placeholder="Paste drive link">
            </div>

            <div class="mb-3">
                <label class="form-label">Event Date</label>
                <input class="form-control" type="date" placeholder="Event date">
            </div>

            <div class="mb-3">
                <label class="form-label">Date Inserted</label>
                <input class="form-control" type="date" placeholder="Enter date inserted">
            </div>
        </form>

    </x-modal>
</x-app-layout>
