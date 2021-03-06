USE [KAOSAN]
GO
/****** Object:  Table [Customer].[Customer]    Script Date: 9/23/2020 6:17:49 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [Customer].[Customer](
	[ID] [bigint] IDENTITY(1,1) NOT NULL,
	[NamaPelanggan] [nvarchar](255) NULL,
	[NamaPerusahaan] [nvarchar](255) NULL,
	[Tipe] [nvarchar](50) NULL,
	[Alamat] [nvarchar](255) NULL,
	[Kota] [nvarchar](255) NULL,
	[NoTelp] [nvarchar](255) NULL,
	[TanggalLahir] [datetime] NULL,
	[Email] [nvarchar](255) NULL,
 CONSTRAINT [PK_Customer] PRIMARY KEY CLUSTERED 
(
	[ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [Customer].[TransaksiCustomer]    Script Date: 9/23/2020 6:17:49 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [Customer].[TransaksiCustomer](
	[ID] [bigint] IDENTITY(1,1) NOT NULL,
	[IDPelanggan] [bigint] NULL,
	[IDProduct] [bigint] NULL,
	[IDCabang] [int] NULL,
	[Qty] [int] NULL,
	[Price] [decimal](20, 4) NULL,
	[IDPrice] [int] NULL,
	[TglTransaksi] [datetime] NULL,
	[CreatedBy] [nvarchar](50) NULL,
	[CreatedDate] [datetime] NULL,
 CONSTRAINT [PK_TransaksiCustomer] PRIMARY KEY CLUSTERED 
(
	[ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [Master].[Cabang]    Script Date: 9/23/2020 6:17:49 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [Master].[Cabang](
	[ID] [int] IDENTITY(1,1) NOT NULL,
	[KodeCabang] [nvarchar](50) NULL,
	[NamaCabang] [nvarchar](255) NULL,
	[PIC] [nvarchar](255) NULL,
 CONSTRAINT [PK_Cabang] PRIMARY KEY CLUSTERED 
(
	[ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [Master].[Color]    Script Date: 9/23/2020 6:17:49 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [Master].[Color](
	[ID] [int] NULL,
	[ColorName] [nvarchar](50) NULL
) ON [PRIMARY]
GO
/****** Object:  Table [Master].[Discount]    Script Date: 9/23/2020 6:17:49 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [Master].[Discount](
	[ID] [int] NULL,
	[NameDiscount] [nvarchar](255) NULL,
	[TipeDiscount] [nvarchar](255) NULL,
	[Parameter] [nvarchar](255) NULL,
	[Value] [decimal](20, 4) NULL,
	[ValidityFrom] [datetime] NULL,
	[ValidityTo] [datetime] NULL,
	[IsActive] [bit] NULL
) ON [PRIMARY]
GO
/****** Object:  Table [Master].[DiscountDetail]    Script Date: 9/23/2020 6:17:49 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [Master].[DiscountDetail](
	[ID] [bigint] NULL,
	[DiscountID] [int] NULL,
	[Parameterkey] [nvarchar](255) NULL
) ON [PRIMARY]
GO
/****** Object:  Table [Master].[PriceColor]    Script Date: 9/23/2020 6:17:49 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [Master].[PriceColor](
	[ID] [bigint] NULL,
	[ProductID] [bigint] NULL,
	[Retail] [int] NULL,
	[ProductColorID] [bigint] NULL,
	[Price] [decimal](20, 4) NULL
) ON [PRIMARY]
GO
/****** Object:  Table [Master].[PriceList]    Script Date: 9/23/2020 6:17:49 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [Master].[PriceList](
	[ID] [int] IDENTITY(1,1) NOT NULL,
	[IDProduct] [bigint] NULL,
	[IDCabang] [int] NULL,
	[ValidityFrom] [datetime] NULL,
	[ValidityTo] [datetime] NULL,
	[IsActive] [bit] NULL,
 CONSTRAINT [PK_PriceList] PRIMARY KEY CLUSTERED 
(
	[ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [Master].[PriceListDetail]    Script Date: 9/23/2020 6:17:49 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [Master].[PriceListDetail](
	[ID] [bigint] NULL,
	[PriceID] [bigint] NULL,
	[Size] [nvarchar](20) NULL,
	[Price] [decimal](20, 4) NULL,
	[IsActive] [bit] NULL
) ON [PRIMARY]
GO
/****** Object:  Table [Master].[PriceSize]    Script Date: 9/23/2020 6:17:49 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [Master].[PriceSize](
	[ID] [bigint] NULL,
	[ProductID] [bigint] NULL,
	[ProductSizeID] [bigint] NULL,
	[Price] [decimal](20, 4) NULL
) ON [PRIMARY]
GO
/****** Object:  Table [Master].[Product]    Script Date: 9/23/2020 6:17:49 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [Master].[Product](
	[ID] [bigint] IDENTITY(1,1) NOT NULL,
	[KodeProduct] [nvarchar](50) NULL,
	[NamaProduct] [nvarchar](255) NULL,
	[TipeProduct] [nvarchar](255) NULL,
	[Kategori] [nvarchar](255) NULL,
	[Merk] [nvarchar](255) NULL,
	[Supplier] [nvarchar](255) NULL,
	[Modal] [decimal](20, 4) NULL,
	[HPP] [decimal](20, 4) NULL,
	[CreatedBy] [nvarchar](255) NULL,
	[CreatedDate] [datetime] NULL,
	[UpdatedBy] [nvarchar](255) NULL,
	[UpdatedDate] [datetime] NULL,
 CONSTRAINT [PK_Product] PRIMARY KEY CLUSTERED 
(
	[ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [Master].[ProductColor]    Script Date: 9/23/2020 6:17:49 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [Master].[ProductColor](
	[ID] [bigint] NULL,
	[ProductID] [bigint] NULL,
	[ColorID] [int] NULL
) ON [PRIMARY]
GO
/****** Object:  Table [Master].[ProductSize]    Script Date: 9/23/2020 6:17:49 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [Master].[ProductSize](
	[ID] [bigint] NULL,
	[ProductID] [bigint] NULL,
	[SizeID] [int] NULL
) ON [PRIMARY]
GO
/****** Object:  Table [Master].[Size]    Script Date: 9/23/2020 6:17:49 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [Master].[Size](
	[ID] [int] NULL,
	[Size] [nvarchar](50) NULL
) ON [PRIMARY]
GO
/****** Object:  Table [Master].[StockProduct]    Script Date: 9/23/2020 6:17:49 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [Master].[StockProduct](
	[ID] [bigint] IDENTITY(1,1) NOT NULL,
	[ProductID] [bigint] NULL,
	[CabangID] [int] NULL,
	[QtyStock] [int] NULL,
	[QtyOnOrder] [int] NULL,
	[QtyMinimumStock] [int] NULL,
 CONSTRAINT [PK_StockProduct] PRIMARY KEY CLUSTERED 
(
	[ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [Transaksi].[Invoice]    Script Date: 9/23/2020 6:17:49 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [Transaksi].[Invoice](
	[ID] [bigint] NULL,
	[SalesOrderID] [bigint] NULL,
	[DueDate] [datetime] NULL,
	[PaymentDate] [datetime] NULL,
	[CreatedBy] [nvarchar](50) NULL,
	[CreatedDate] [datetime] NULL,
	[UpdateBy] [nvarchar](50) NULL,
	[UpdateDate] [datetime] NULL
) ON [PRIMARY]
GO
/****** Object:  Table [Transaksi].[SalesOrder]    Script Date: 9/23/2020 6:17:49 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [Transaksi].[SalesOrder](
	[ID] [bigint] NOT NULL,
	[IDPelanggan] [int] NULL,
	[IDCabang] [int] NULL,
	[TglSalesOrder] [datetime] NULL,
	[Status] [nvarchar](50) NULL,
	[CreatedBy] [nvarchar](50) NULL,
	[CreatedDate] [datetime] NULL,
	[UpdateBy] [nvarchar](50) NULL,
	[UpdateDate] [datetime] NULL,
 CONSTRAINT [PK_SalesOrder] PRIMARY KEY CLUSTERED 
(
	[ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [Transaksi].[SalesOrderDetail]    Script Date: 9/23/2020 6:17:49 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [Transaksi].[SalesOrderDetail](
	[ID] [bigint] NULL,
	[SalesOrderID] [bigint] NULL,
	[ProductID] [bigint] NULL,
	[Qty] [int] NULL,
	[Price] [decimal](20, 4) NULL,
	[IDPrice] [int] NULL,
	[CreatedBy] [nvarchar](50) NULL,
	[CreatedDate] [datetime] NULL,
	[UpdateBy] [nvarchar](50) NULL,
	[UpdateDate] [datetime] NULL
) ON [PRIMARY]
GO
