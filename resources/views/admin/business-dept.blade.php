<x-app-layout>
    <pop-notify hidden>

    </pop-notify>
    <div class="container-fluid">
        <!-- Page title & breadcrumb -->
        <x-breadcrumb></x-breadcrumb>
        <div class="row">

            <!-- START OF BUSINESS UNIT LIST -->
            <div class="col-xl-6 col-md-6">
                <div class="fx-card" id="dealtbl">
                    <div class="fx-card-header">
                        <h4 class="fx-card-title">Business Unit List</h4>
                        <div class="header-tools">
                            <a href="javascript:void(0)" class="m-r-10 fx-full-card me-2"><i class="ri-fullscreen-line"
                                    title="Full Screen"></i></a>
                            <button type="button" class="fx-btn ripple-btn color-dark" data-bs-toggle="modal"
                                data-bs-target="#addBusinessUnit" style="height: 30px !important"><i
                                    class="ri-add-line m-r-10"></i>Business Unit</button>
                        </div>
                    </div>
                    
                    <div class="fx-card-content card-default">
                        <div class="container-fluid">
                            <table id="business-unit-list" class="table">
                                <thead class="table__thead">
                                    <tr>
                                        <th class="table__th sorting">Business Code</th>
                                        <th class="table__th sorting">Business Name</th>
                                        <th class="table__th sorting">Created At</th>
                                        <th class="table__th "></th>
                                    </tr>
                                </thead>
                                <tbody class="table__tbody">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END OF BUSINESS UNIT LIST -->

            <!-- START OF BUSINESS UNIT LIST -->
            <div class="col-xl-6 col-md-6">
                <div class="fx-card" id="dealtbl">
                    <div class="fx-card-header">
                        <h4 class="fx-card-title">Department List</h4>
                        <div class="header-tools">
                            <a href="javascript:void(0)" class="m-r-10 fx-full-card me-2"><i class="ri-fullscreen-line"
                                    title="Full Screen"></i></a>
                            <button type="button" class="fx-btn ripple-btn color-dark" data-bs-toggle="modal"
                                data-bs-target="#addDepartment" style="height: 30px !important"><i
                                class="ri-add-line m-r-10"></i>Department</button>
                        </div>
                    </div>
                    <div class="fx-card-content card-default">
                        <div class="container-fluid">
                            <table id="department-list-data" class="table">
                                <thead class="table__thead">
                                    <tr>
                                        <th class="table__th sorting">Dept ID.</th>
                                        <th class="table__th sorting">Code</th>
                                        <th class="table__th sorting">Name</th>
                                        <th class="table__th sorting">Created at</th>
                                        <th class="table__th "></th>
                                    </tr>
                                </thead>
                                <tbody class="table__tbody">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END OF BUSINESS UNIT LIST -->

        </div>
    </div>

    <!-- ADD BUSINESS UNIT -->
    <x-modal icon="ri-add-line" modal_title="Business Unit" modal_type="fade" id="addBusinessUnit" tabindex="-1"
        aria-labelledby="addBusinessUnitLabel" aria-hidden="true" modal_size="" modal_mode=""
        buttons="false" route-save="{{ route('saveBusinessUnit') }}">
        
        <div class="gray start-0 d-none"></div>

        {{-- Content Here --}}
        <form action="" id="addBusinessUnitData">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <x-textm-input type="text" name="business_code" required
                            :value="old('business_code')" autocomplete="business_code" />
                        <x-inputm-label for="business_code" :value="__('Business Code')"
                            required />
                    </div>
                    <div class="form-group mb-3">
                        <x-textm-input type="text" name="business_name" required
                            :value="old('business_name')" autocomplete="business_name" />
                        <x-inputm-label for="business_name" :value="__('Business Name')" />
                    </div>
                </div>
            </div>
        </form>
    </x-modal>

    <!-- EDIT BUSINESS UNIT -->
    <x-modal icon="ri-edit-2-line" modal_title="Edit Business Unit" modal_type="fade" id="editBusinessUnit" tabindex="-1"
        aria-labelledby="editBusinessUnitLabel" aria-hidden="true" modal_size="" modal_mode=""
        buttons="false" route-save="{{ route('editBusinessUnit') }}">
        {{-- Content Here --}}
        <form action="" id="editBusinessUnitData">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <input type="hidden" name="id" id="id" />
                    <input type="hidden" name="prev_business_code" id="prev_business_code" />
                    <div class="form-group mb-3">
                        <x-textm-input type="text" name="business_code" required
                            :value="old('business_code')" autocomplete="business_code" />
                        <x-inputm-label for="business_code" :value="__('Business Code')"
                            required />
                    </div>
                    <div class="form-group mb-3">
                        <x-textm-input type="text" name="business_name" required
                            :value="old('business_name')" autocomplete="business_name" />
                        <x-inputm-label for="business_name" :value="__('Business Name')" />
                    </div>
                </div>
            </div>
        </form>
    </x-modal>
    {{-- ADD DEPARTMENT --}}
    <x-modal icon="ri-add-line" modal_title="Department Info" modal_type="fade" id="addDepartment" tabindex="-1"
        aria-labelledby="addDepartmentLabel" aria-hidden="true" modal_size="" modal_mode=""
        buttons="false" route-save="{{ route('saveDepartment') }}">
        <div class="gray start-0 d-none"></div>

        {{-- Content Here --}}
        <form action="" id="addDepartmentData">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="sel sel-unactive form-group mb-3">
                        <select class="sele form-control"
                            name="business_unit">
                            <option value="" hidden></option>
                            @foreach ($businessunits as $businessunit)
                                <option
                                    value="{{ $businessunit->business_code }}">
                                    {{ $businessunit->business_name }}</option>
                            @endforeach
                        </select>
                        <label class="sellabel">Business Unit<span
                                class="text-danger">*</span></label>
                        <label class="lableic"><span
                                class="ri-arrow-down-s-line"></span></label>
                    </div>
                    <div class="form-group mb-3">
                        <x-textm-input type="text" name="department_id" required
                            :value="old('department_id')" autocomplete="department_id" />
                        <x-inputm-label for="department_id" :value="__('Department ID')"
                            required />
                    </div>
                    <div class="form-group mb-3">
                        <x-textm-input type="text" name="department_name" required
                            :value="old('department_name')" autocomplete="department_name" />
                        <x-inputm-label for="department_name" :value="__('Department Name')" />
                    </div>
                </div>
    
            </div>
        </form>

    </x-modal>
    {{-- EDIT DEPARTMENT --}}
    <x-modal icon="ri-edit-2-line" modal_title="Edit Department" modal_type="fade" id="editDepartment" tabindex="-1"
        aria-labelledby="editDepartmentLabel" aria-hidden="true" modal_size="" modal_mode=""
        buttons="false" route-save="{{ route('editdeptdata') }}">
        {{-- Content Here --}}
        <form action="" id="editDepartmentData">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <input type="hidden" name="id" id="idd" />
                    <input type="hidden" name="prev_dept_id" id="prev_dept_id" />
                    <div class="sel sel-active form-group mb-3">
                        <select class="sele form-control"
                            name="business_unit" id="businessSelectEd">
                            <option value="" hidden></option>
                            @foreach ($businessunits as $businessunit)
                                <option
                                    value="{{ $businessunit->business_code }}">
                                    {{ $businessunit->business_name }}</option>
                            @endforeach
                        </select>
                        <label class="sellabel">Business Unit<span
                                class="text-danger">*</span></label>
                        <label class="lableic"><span
                                class="ri-arrow-down-s-line"></span></label>
                    </div>
                    <div class="form-group mb-3">
                        <x-textm-input type="text" name="department_id" required
                            :value="old('department_id')" autocomplete="department_id" id="edDeptID"/>
                        <x-inputm-label for="department_id" :value="__('Department ID')"
                            required />
                    </div>
                    <div class="form-group mb-3">
                        <x-textm-input type="text" name="department_name" required
                            :value="old('department_name')" autocomplete="department_name" id="edDeptName"/>
                        <x-inputm-label for="department_name" :value="__('Department Name')" />
                    </div>
                </div>
    
            </div>
        </form>
    </x-modal>  
</x-app-layout>

