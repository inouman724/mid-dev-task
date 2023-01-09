# mid-dev-task

For testing the api please use the following curl in Insomnia or Postman


curl --request POST \
  --url http://localhost/php-mid-developer/calculator.php \
  --header 'Content-Type: multipart/form-data' \
  --form cost_per_mile=1 \
  --form two_person_job=true \
  --form 'drop_offs[]=55' \
  --form 'drop_offs[]=33'
