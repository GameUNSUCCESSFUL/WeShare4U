<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
    <div class="row">
        <?php if (validation_errors()) : ?>
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors() ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if (isset($error)) : ?>
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                    <?= $error ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="col-md-12">
            <div class="page-header">
                <h1>Register</h1>
            </div>
            <?= form_open('UserController/register')?>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                <p class="help-block">A valid email address</p>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter a password">
                <p class="help-block">At least 6 characters</p>
            </div>
            <div class="form-group">
                <label for="password_confirm">Confirm password</label>
                <input type="password" class="form-control" id="password_confirm" name="password_confirm"
                       placeholder="Confirm your password">
                <p class="help-block">Must match your password</p>
            </div>
            <div class="form-group">
                <label for="firstname">Firstname</label>
                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter a firstname">
                <p class="help-block">At least 4 characters, letters or numbers only</p>
            </div>
            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter a lastname">
                <p class="help-block">At least 4 characters, letters or numbers only</p>
            </div>
            <div class="form-group">
                <label for="identity_card">Identity_card</label>
                <input type="number" class="form-control" id="identity_card" name="identity_card"
                       placeholder="Enter a identity_card">
                <p class="help-block">At least 4 characters, letters or numbers only</p>
            </div>
            <div class="form-group">
                <label for="district">District</label>
                <input type="text" class="form-control" id="district" name="district" placeholder="Enter a district">
                <p class="help-block">At least 4 characters, letters or numbers only</p>
            </div>
            <div class="form-group">
                <label for="province">Province</label>
                <input type="text" class="form-control" id="province" name="province" placeholder="Enter a province">
                <p class="help-block">At least 4 characters, letters or numbers only</p>
            </div>
            <div class="form-group">
                <label for="zip_code">Zip_Code</label>
                <input type="number" class="form-control" id="zip_code" name="zip_code" placeholder="Enter a zip_code">
                <p class="help-block">At least 4 characters, letters or numbers only</p>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea id="address" name="address" rows="4" cols="50" placeholder="Enter a Address"></textarea>
                <p class="help-block">At least 4 characters, letters or numbers only</p>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter a phone">
                <p class="help-block">At least 4 characters, letters or numbers only</p>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-default" value="Register">
            </div>
            </form>
        </div>
    </div><!-- .row -->
</div><!-- .container -->