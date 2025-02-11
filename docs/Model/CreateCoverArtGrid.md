# # CreateCoverArtGrid

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**background** | **string** | The background for the cover art. |
**image_size** | **int** | The size of the cover art image. |
**dimension** | **int** | The dimension to use for this grid. A grid of dimension 3 has 3 images across and 3 images down, for a total of 9 images. |
**skip_missing** | **bool** | If cover art is missing for a given release_mbid, skip it and move on to the next one, if true is passed. If false, the show-caa option will decide what happens. |
**show_caa** | **bool** | If cover art is missing and skip-missing is false, then show-caa will determine if a blank square is shown or if the Cover Art Archive missing image is shown. |
**tiles** | **string[]** | The tiles paramater is a list of strings that determines the location where cover art images should be placed. Each string is a comma separated list of image cells. A grid of dimension 3 has 9 cells, from 0 in the upper left hand corner, 2 in the upper right hand corner, 6 in the lower left corner and 8 in the lower right corner. Specifying only a single cell will have the image cover that cell exactly. If more than one cell is specified, the image will cover the area defined by the bounding box of all the given cells. These tiles only define bounding box areas - no clipping of images that may fall outside of these tiles will be performed. |
**release_mbids** | **string[]** | An ordered list of release_mbids. The images will be loaded and processed in the order that this list is in. The cover art for the release_mbids will be placed on the tiles defined by the tiles parameter. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
