<div class="row">
  <div class="col-6">
      <div class="mb-3 row">
          <label for="staff_id" class="col-4 form-label">Staff ID</label>
          <div class="col-8">
              <input name="staff_id" class="form-control" readonly value="{{ $staff->staff_id }}" type="text" placeholder="Staff ID">
          </div>
      </div>
  </div>
    <div class="col-6">
        <div class="mb-3 row">
            <label for="fullname" class="col-4 form-label">Full Name</label>
            <div class="col-8">
                <input name="full_name" class="form-control" value="{{ $staff->full_name }}" type="text" placeholder="Full Name">
            </div>
        </div>
    </div>
  <div class="col-6">
      <div class="mb-3 row">
          <label for="gender" class="col-4 form-label">Gender</label>
          <div class="col-8">
              <select name="gender" id="gener" class="form-control">
                  <option value="">Select All</option>
                  <option value="1" {{ $staff->gender === 1 ? 'selected' : ''}}>Male
                  </option>
                  <option value="2" {{ $staff->gender === 2 ? 'selected' : ''}}>Female
                  </option>
              </select>
          </div>
      </div>
  </div>
  <div class="col-6">
      <div class="mb-3 row">
          <label for="bd_from" class="col-4 form-label">Birthday</label>
          <div class="col-8">
              <input type="datetime-flatpickr" name="birth_date"
                  class="form-control datetime-flatpickr" value="{{ $staff->birth_date }}">
          </div>
      </div>
  </div>
</div>