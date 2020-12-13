  <div class="card-text">
    @csrf
    <div class="md-form">
      <label for="name">ユーザー名</label>
      <input type="text" class="form-control" id="name" name="name" required value="{{ $user->name ?? old('name') }}">
      <small>英数字3〜16文字(登録後の変更はできません)</small>
    </div>
    <div class="md-form">
      <label for="email">メールアドレス</label>
      <input type="text" class="form-control" id="email" name="email" required value="{{ $user->email ?? old('email') }}">
    </div>
    <!-- <div class="md-form">
      <label for="image" class="active">画像</label>
      <input type="file" id="image" name="image">
    </div> -->
    <!-- <div class="md-form">
      <label for="password">パスワード</label>
      <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <div class="md-form">
      <label for="password_confirmation">パスワード(確認)</label>
      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
    </div> -->
    <!-- <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">更新する</button> -->
  </div>