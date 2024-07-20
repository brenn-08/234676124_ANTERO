@echo off
rem Define archive directory
set archive_dir=E:\Archive

echo Sorting text files in the Downloads folder of user 'anter' on Drive C: by date...
for /f "delims=" %%a in ('dir /b /od "C:\Users\anter\Downloads\*.txt"') do (
    echo %%a
)

echo Sorting archived files by size...
cd /d "%archive_dir%"
for /f "delims=" %%b in ('dir /b /os') do (
    echo %%b
)

set /p permission=Do you want to delete the old, large files? (yes/no): 
if /i "%permission%"=="yes" (
    del /q "%archive_dir%\*.txt"
    echo Old, large files deleted.
) else (
    echo Operation canceled.
    cd /d "C:\Users\anter\Downloads\"
)

