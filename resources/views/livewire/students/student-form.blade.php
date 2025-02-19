<div>
    <h2>Add a New Student</h2>
    <form>
        @csrf
        <table>
            <tr>
                <th><label for="firstname">First Name</label></th>
                <td><input type="text" id="firstname" name="first_name" wire:model="first_name"></td>
            </tr>
            <tr>
                <th><label for="lastname">Last Name</label></th>
                <td><input type="text" id="lastname" name="last_name" wire:model="last_name"></td>
            </tr>
            <tr>
                <th><label for="grade">Grade</label></th>
                <td><input type="text" id="grade" name="grade" wire:model="grade"></td>
            </tr>
            <tr>
                <th><label for="age">Age</label></th>
                <td><input type="text" name="age" id="age" wire:model="age"></td>
            </tr>
            <tr>
                <th><label>Gender</label></th>
                <td>
                    <label>
                        <input type="radio" id="gender-m" name="gender" wire:model="gender" value="Male"> Male
                    </label>
                    <label>
                        <input type="radio" id="gender-f" name="gender" wire:model="gender" value="Female"> Female
                    </label>
                </td>
            </tr>
            <tr>
                <th><label for="address">Address</label></th>
                <td><input type="text" id="address" name="address" wire:model="address"></td>
            </tr>
            <tr>
                <th><label for="tp_no">T.P Number</label></th>
                <td><input type="text" id="tp_no" name="tp_no" wire:model="tp_no"></td>
            </tr>
        </table>
        <button type="button" wire:click="store_student">Add Student</button>
    </form>

   
</div>


