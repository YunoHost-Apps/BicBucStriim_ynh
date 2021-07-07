BicBucStriim is a simple PHP application that runs in the Apache/PHP environment provided by the NAS (or any other server). It assumes that you manage your e-book collection with Calibre. The application reads the [Calibre](https://calibre-ebook.com/) data and publishes it in HTML form. To access the e-book catalog you simply point your ebook reader to your NAS, select one of your e-books and download it.

## Configuration

A freshly installed BicBucStriim installation will show the login page. The initial login information for the administrator is

    user name: admin
    password : admin

## Troubleshooting

If you encounter problems, use the installation test to check your environment. Invoke this test by navigating to `http://domain.ltd/bbs/installcheck.php`. This test checks for problems that users experienced in the past.