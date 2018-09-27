# Changing the Background for the Search Bar

## Selecting an image

You should pick an image that is around 100px tall and over 2000px wide. An image less than 100px tall will display as vertically tiled on the front page. The image will also tile at screen widths greater than the width of the image; while 2000px will cover almost all screen widths, it would not be unreasonable to choose 2200 or 2400px if possble. The colors and subject of the image are up to your discretion.

## Uploading an image

To use an image as the background, it is recommended that you first upload it to the press site.

First, in the administration menu, go to the `Content` tab and click on the `Files` link. Click the link to `Add file`.

On this page you should see a box labeled `Filename` containing the text `Drag files here`. You can drag and drop files from your computer into this box, or you can click the link under the box labeled `Add files` to select the file from a dialog on your computer. Once you have selected the file, click `Next`.

You can choose to fill out alt text and title text on the next page if you want, but these will not be used if the image only appears as the background of the search bar, since the image is used only for decorative purposes.

Select `Save` to finish creating the image. You should be redirected back to a list of files, with the file you just uploaded at the top. Click on the name of the file as it appears in the table. You will be directed to a page showing your image. If the image does not appear, it likely did not upload correctly.

Right click on the image. You should see an option to view image in a new tab, or something similar depending on your browser. Click this option. The URL in the URL bar of your browser should be something like `osupress.oregonstate.edu/sites/all/files/file_you_just_uploaded.jpg` with your new filename instead of `file_you_just_uploaded.jpg`. Copy the url, starting at `sites` and ending at the end of the URL. For the previous example link, you would copy `sites/all/files/file_you_just_uploaded.jpg`, excluding `osupress.oregonstate.edu`. Save the value you just copied so you can reference it later.

## Changing the background

First, in the administration menu, go to the `Appearance` tab and mouse over the `Settings` tab. Click on `Ponderosa`.

In the Ponderosa settings page, under the `OSU Theme options` section, find the `Search background image` input. In this value, paste the image link that you copied before (`sites/all/files/file_you_just_uploaded.jpg` in our example). Scroll down to the bottom of the page and click `Save configuration`.

Click the home button in the administration menu to be redirected back to the base of the site. Your new background image should appear behind the search bar.

## If the image does not appear

* Make sure the image was uploaded correctly
* Make sure you have copied the link correctly. There should be no forward slash at the start of your link (for example, use `sites/all/files...` instead of `/sites/all/files...`)
* Try uploading the image again and repeating the process