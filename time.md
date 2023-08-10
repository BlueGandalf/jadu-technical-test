# Time breakdown

| Time started | Duration | Description |
| ------------ | -------- | ----------- |
| 2023-08-09 18:00  | 1 hour | Development environment set up. Installed LAMP on wsl and made a fresh symfony instance. |
| 2023-08-09 19:30  | 2.5 hours | Built basic twig views for each of the operations, as well as a home page. These are functional - they have working forms and display a result on submission. These results aren't accurate as the operations in Checker have not be implemented yet. |
| 2023-08-09 22:00  | 0.5 hours | First draft of the Checker operations implemented. A brief test using the web pages shows that they're working. |
| 2023-08-10 12:30  | 1 hour | PHPUnit added to the project and initial tests added. Corrections made to CheckerService in response to some failed tests. CheckerService was not previously considering capital letters, whitespace, or supporting all unicode symbols. |
| 2023-08-10 17:30  | 1 hour | Add ConsoleCommands that also can be used to access the Checker operations |
| 2023-08-10 18:30  | 30 mins | Reviewing code to make sure it is clean and tidy. |
