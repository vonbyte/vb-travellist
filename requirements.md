# Packing List

## User can create a packing list

### Data Modelling

List Attributes:

- Listname
    - VARCHAR
    - not null
    - max. 150 Chars
- Start-Date
    - Date
- End-Date
    - Date
- Description
    - Long Text
- Notes
    - Long Text
      
OPEN
List Relationships:
- User
    - Many-2-One

### View

Form
- Namefield: Text, required, max. 150
- Startfield: Date
- Endfield: Date
- Description: Textarea
- Notes: Textarea
- Submit Button
- Cancel Button (=> Landingpage)
- UserIdfield: Hidden
- Fields are not prefilled (except UserID)

### Functional/CRUD

Form Submit/Create Request

- Validates fields according to specifications
- Only submits request when specifications are satisfied
- Saves new packing list in database.
- Attributes are filled with the entered data.

## User can list packing lists

### View

Table Cells

- Namefield
- Startfield
- Endfield
- Action Buttons
  Actions
- Edit List
    - Links to Edit Form
- Delete List
    - Triggers Delete Logic
      Filter
- Tbd

### Functional/CRUD

Table/List

- Retrieves all travellists
- Lists are sorted by creation date
- tbd.: Pagination
  Table/Filter
- Tbd

## User can edit a single packing list

### View

Form

- Namefield: Text, required, max. 150
- Startfield: Date
- Endfield: Date
- Description: Textarea
- Notes: Textarea
- Submit Button
- Cancel Button (=> Table List)
- UserIdfield: Hidden
- Fields are prefilled with data of given packing list

### Functional/CRUD

Form Data/Read Request

- Get correct Packinglist entity
  Form Submit/Update Request
- Validates fields according to specifications
- Only submits request when specifications are satisfied
- Saves updated packing list in database.
- Attributes are filled with the updated data.

## User can delete a packing list

### Functional/CRUD

Removing entry/Delete Request

- Removes Packinglist from database
- tbd.: Soft Delete/Deactivation

## User can add items to a packing list

## User can edit items on a packing list

## User can delete items on a packing list

## User can create locations

## User can list locations

## User can edit a single location

## User can delete a single location

## User can connect locations to packing lists

## User can create categories

## User can list categories

## User can edit a single category

## User can delete a single category

## User can connect categories to packing lists

## User can create tags

## User can list tags

## User can edit a single tag

## User can delete a single tag

## User can connect tags to packing lists
