## PHP Upload Zipper

### Prerequisite
* ZipArchive &ndash; [(Documentation)](https://www.php.net/manual/en/class.ziparchive.php) [(Setup Guide)](ZipArchive-Installation.md) 

### Usage
```php
require 'path/to/Zipper.php';

// Upload <multipart/form-data> with filename 'file1' and 'file2'
$result = Zipper::zip('/absolute/output/path/zipname.zip', 'file', 'file2');
if ($result) {
    echo "Upload success!";
} else {
    echo "Upload failed!";
}
```