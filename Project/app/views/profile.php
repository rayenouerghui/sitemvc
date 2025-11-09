<main>
  <section class="form-section">
    <div class="form-container">
      <h2>User Profile</h2>
      <form id="profileForm">
        <div class="input-group">
          <label>First Name</label>
          <input type="text" placeholder="John" />
        </div>
        <div class="input-group">
          <label>Last Name</label>
          <input type="text" placeholder="Doe" />
        </div>
        <div class="input-group">
          <label>Email</label>
          <input type="email" placeholder="john@example.com" />
        </div>
        <div class="input-group">
          <label>Phone</label>
          <input type="tel" placeholder="+1 234 567 890" />
        </div>
        <div class="input-group">
          <label>Profile Picture</label>
          <input type="file" id="avatarInput" accept="image/*" />
          <img id="previewAvatar" src="/resources/default-avatar.png" alt="Preview" class="avatar-preview">
        </div>
        <button type="submit" class="btn-primary">Save Profile</button>
      </form>
    </div>
  </section>
</main>
