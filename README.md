# Manual Implementation of PHP functions : array_slice() 
1. Created a Numeric array $numArray
2. Created the arraySlice function with parameters $start, $startnum, $end  
3. assigned variable $sliceresult to an empty array 
4. Created a foreach loop to traverse the array's keys (index) and within it there is an if statement that checks if the keys are numeric. That way it won't show results for associated arrays. If not it would echo message "Not Numeric Array". 
5. Then an if statement to check for JSON string code and convert it to PHP as long as it is an array. 
6. Created an If statement to print out array if start and end variables are null 
7. Created a for loop to traverse the array and starts from the $start variable I created. 
8. Used the "array_push" function to add the split elements to $sliceResult array and returned $sliceResult 
9. Assigned the $slice_length variable to $sliceResult array and the loop returns $sliceResult. 
10. Called the arraySlice function within the "print_r" function to print results. 11. Put down commented result from running the arraySlice function.
