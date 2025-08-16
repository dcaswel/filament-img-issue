## Filament 4 Image Issues

This is a repo that I built in order to show a minimal example of a couple bugs I found in filament 4.

This is a basic Laravel app with a filament 4 admin panel found at /admin on the main url.
This has a single resource called Book and I included a seeder to create a test user as well as 3 books.
One of the books has a bad url for the image. Another book called Freefall has a "valid" url but you'll have to 
upload a new image for that through the edit form since the filename will obviously be different for you. I included an
image in the public/images folder for you to use.

The issues that I have discovered are:
- In the table and infolist, you'll see that I added a defaultImageUrl to the display for when the image is not found. 
  - This is working if the field is not null but the image doesn't exist. In Filament 3, this would work if the image was null as well.
- In the view page, click on the edit button and it will open the edit form in a slideOver.
  - If the book doesn't have an image, upload one then click on the edit button
  - You'll notice that it opens the image editor within the slideOver which cuts off half the image editor.
- I also noticed that if you click on edit in the table, it opens the edit form in a modal. Opening the image editor from there isn't really working either.
