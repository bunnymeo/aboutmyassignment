<!DOCTYPE html>
<html>
  <head>
    <title>Registration Form</title>
  </head>
  <body>
    <h1>Registration Form</h1>
    <form action="" method="get">
      <table>
        <tr>
          <td>First Name:</td>
          <td><input type="text" name="first_name" required></td>
        </tr>
        <tr>
          <td>Last Name:</td>
          <td><input type="text" name="last_name" required></td>
        </tr>
        <tr>
          <td>Gender:</td>
          <td>
            <input type="radio" name="gender" value="male" required>Male
            <input type="radio" name="gender" value="female">Female
          </td>
        </tr>
        <tr>
          <td>Address 1:</td>
          <td><input type="text" name="address_1" required></td>
        </tr>
        <tr>
          <td>Address 2:</td>
          <td><input type="text" name="address_2"></td>
        </tr>
        <tr>
          <td><label for="state">State:</label></td>
          <td>
		  <select id="state" name="state">
		  <option value="select">Select state</option>
		  <option value="johor">Johor</option>
		  <option value="kedah">Kedah</option>
		  <option value="kelantan">Kelantan</option>
		  <option value="melaka">Melaka</option>
		  <option value="negerisembilan">Negeri Sembilan</option>
		  <option value="pahang">Pahang</option>
		  <option value="penang">Penang</option>
		  <option value="perak">Perak</option>
		  <option value="perlis">Perlis</option>
		  <option value="sabah">Sabah</option>
		  <option value="sarawak">Sarawak</option>
		  <option value="selangor">Selangor</option>
		  <option value="terengganu">Terengganu</option>
		  <option value="wpkl">WP Kuala Lumpur</option>
		  <option value="wpl">WP Labuan</option>
		  <option value="wpp">WP Putrajaya</option>
		  </select>
		  </td>
        </tr>
        <tr>
          <td>State:</td>
          <td><input type="text" name="state" required></td>
        </tr>
        <tr>
          <td>Phone Number:</td>
          <td><input type="text" name="phone_number" required></td>
        </tr>
        <tr>
          <td>Email:</td>
          <td><input type="email" name="email" required></td>
        </tr>
        <tr>
          <td>Education Level:</td>
          <td>
            <input type="checkbox" name="education[]" value="spm">SPM
            <input type="checkbox" name="education[]" value="diploma">Diploma
            <input type="checkbox" name="education[]" value="degree">Degree
            <input type="checkbox" name="education[]" value="master">Master
            <input type="checkbox" name="education[]" value="phd">PhD
          </td>
        </tr>
        <tr>
          <td>Username:</td>
          <td><input type="text" name="username" required></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input type="password" name="password" required></td>
        </tr>
        <tr>
          <td>Re-enter Password:</td>
          <td><input type="password" name="confirm_password" required></td>
        </tr>
        <tr>
          <td colspan="2">
            <button type="submit">Submit</button>
            <button type="reset">Clear</button>
            <button type="button" onclick="location.href='website.php';">Cancel</button>
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
