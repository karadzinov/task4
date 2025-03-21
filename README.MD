# Task 4 - Employee and Office Processor

This repository contains the solution for **Task 4**, where we use Laravel Collections to elegantly group employees by their city and associate them with their respective offices.

## Installation Instructions

1. **Clone the Repository**:
   Start by cloning the repository to your local machine:

   ```bash
   git clone https://github.com/karadzinov/task4.git
   cd task4

Install Dependencies: This project uses Laravel Collections. You can install the required dependencies using Composer:


```composer install```


Autoload Classes: Composer will automatically generate the autoload files, so you don’t need to worry about manual loading.

### Usage
Run the Script: After installing dependencies, you can run the PHP script to generate the desired output by executing:

```bash 
   php index.php
 ```  
The script will output the processed list of employees grouped by city and associated with their respective offices.

### Code Explanation
The code in index.php defines a class EmployeeOfficeProcessor, which uses Laravel Collections to group employees by their city and associate them with the corresponding offices.

Grouping employees: The employees are filtered and grouped by city.
Mapping offices: The offices are then associated with the filtered employees based on the city.
The resulting output will be a list of cities with offices, and for each office, the employees who belong to that city.

Output Example
When you run the script, the output will look something like this:
```php
[
    "Dallas" => [
            "Dallas HQ" => ["John", "Jake", "Jill"],
            "Dallas South" => ["John", "Jake", "Jill"],
        ],
    "Austin" => [
             "Austin Branch" => ["Jane"],
    ],
]
```









