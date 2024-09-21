3 cách chống SQL injection:
- Validation dữ liệu nghiêm ngặt
- Ép kiểu dữ liệu $id = (int)$_POST['id']
- mysqli_real_escape_string()