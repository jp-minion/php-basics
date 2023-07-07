<!DOCTYPE html>
<html>
<head>
  <title>Create Product</title>
  <style>
    .form-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #f5f5f5;
    }
    .form-container h2 {
      text-align: center;
    }
    .form-group {
      margin-bottom: 15px;
    }
    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }
    .form-group input {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    .form-group textarea {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      resize: vertical;
    }
    .form-group button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Create Product</h2>
    <form method="POST" action="http://localhost/PHP%20basics%20session/ecommerce-api/product/create.php">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" required>
      </div>
      <div class="form-group">
        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" required></textarea>
      </div>
      <div class="form-group">
        <label for="category_id">Category ID:</label>
        <input type="number" id="category_id" name="category_id" required>
      </div>
      <div class="form-group">
        <button type="submit">Create</button>
      </div>
    </form>
  </div>
</body>
</html>
