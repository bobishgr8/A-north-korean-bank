# Functionalities

---

- Sign up
- Log in
- Log out
- Edit profile
- View account(s) and details
- Deposit money
- Withdraw money
- Transfer money
- Pay bills
- Apply for loans
- Contact customer service
- And so on… (timeout after user inactive) (susceptible to a slow loris due to session setting)

# User Journey

---

The user will be brought in to the sign in page, when the user has no account, they will be prompted to register.
Once the account is registered, a `INSERT` command is run on the `user` table, and a `TRIGGER` will be ran, to automatically create an instance in the `account` table.
The user can then login into the account.







# This is the part where I write documentation about how the functionalities work

---

### Sign up
files included: index.php,register.php,userDAO.php,attempt.php,signup.php

The user will be brought in to the sign in `index.php` page, when the user has no account, they will be prompted to register at `signup.php`.
Once the form is filled in, `signup.php` will call `register.php`, which uses `userDAO.php`'s function register new user.
Once the account is registered, a `INSERT` command is run on the `user` table, and a `TRIGGER` will be ran, to automatically create an instance in the `account` table with 0 balance.
The user can then login into the account.

### Sign up