<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
include 'Classes/Models/User/Customer.php';

        use Classes\Models\User\Customer;

include 'Classes/Models/User/Admin.php';

        use Classes\Models\User\Admin;

include 'Classes/Models/Item/Book.php';

        use Classes\Models\Item\Book;

include 'Classes/Models/Item/Film.php';

        use Classes\Models\Item\Film;

include 'Classes/Models/Item/Magazine.php';

        use Classes\Models\Item\Magazine;

$myBook = new Book();
        $myBook->loanItem();
        $myBook->getItemId(); 

        $lydiaExistingCustomer = new Customer("Lydia", "Babygund123"); // existing customer
        print_r($lydiaExistingCustomer);

        $lydiaExistingCustomer->loanItem(1);

        $andrewNewCustomer = Customer::register("Willie", "ASecurePassword", "Andrew", "Reed", "Flat 4", "Marylebone", "London", "W1U 5LE", "andrew_reed@hotmail.com", "07774318425"); // new customer
        print_r($andrewNewCustomer); 
        
        ?>
        
    </body>
</html>
